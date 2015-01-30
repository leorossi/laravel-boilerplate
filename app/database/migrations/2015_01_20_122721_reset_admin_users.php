<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ResetAdminUsers extends Migration {

	private $adminRole;
	public function __construct() {
		$this->adminRole = Role::where('name', 'admin')->first();		
	}	
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		foreach(Config::get('boilerplate.admins') as $email => $password) {
			$u = User::where('email', $email)->first();
			if (!$u) {
				// no user found, creating a new one.
				$u = new User();
				$u->email = $email;
				$u->password = Hash::make($password);
				$u->remember_token = '';
			}
			$u->role_id = $this->adminRole->id;
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
