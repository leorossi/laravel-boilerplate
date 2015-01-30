	<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$roles = Config::get('boilerplate.roles');
		if (!isset($roles['default'])) {
			throw new Exception('You should set the default role in your config/boilerplate.php file.');
		}

		Schema::create('user_roles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('label', 50);
			$table->string('name', 50);
			$table->timestamps();
		});

		// Insert roles in table
		foreach($roles as $name => $label) {
			$r = new Role();
			$r->name = $name;
			$r->label = $label;
			$r->save();
		}

		// add foreign key to users table
		Schema::table('users', function(Blueprint $table) {
			$normalUserRole = Role::where('name', 'default')->first();	
			$table->integer('role_id')->unsigned()->after('password')->default($normalUserRole->id);
			$table->foreign('role_id')->references('id')->on('user_roles');	
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_role_id_foreign');
			$table->dropColumn('role_id');
		});
		
		Schema::drop('user_roles');
	}

}
