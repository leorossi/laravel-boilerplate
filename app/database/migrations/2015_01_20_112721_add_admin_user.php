<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdminUser extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$u = new User();
		$u->email = "admin@example.com";
		$u->password = Hash::make('admin');
		$u->role = 1;
		$u->save();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		$u = User::where(['email' => 'admin@example.com']);
		$u->delete();
	}

}
