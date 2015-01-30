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
		$adminRole = Role::where('name', 'admin')->first();

		foreach(Config::get('boilerplate.admins') as $email => $password) {
			$u = new User();
			$u->email = $email;
			$u->password = Hash::make($password);
			$u->role_id = $adminRole->id;
			$u->remember_token = '';
			$u->save();	
		}
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
