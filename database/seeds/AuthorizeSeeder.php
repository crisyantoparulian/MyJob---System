<?php

use Illuminate\Database\Seeder;

class AuthorizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = [
			"slug" => "admin",
			"name" => "Admin",
			"permissions" => [
			"admin" => true
		]
		];
	Sentinel::getRoleRepository()->createModel()->fill($role_admin)->save();
	$adminrole = Sentinel::findRoleByName('Admin');
	$user_admin = ["email"=>"jobadmin@mail.com", "password"=>"12345678"];
	$adminuser = Sentinel::registerAndActivate($user_admin);
	$adminuser->roles()->attach($adminrole);
	///// this for seed data writer
	$role_low = [
		"slug" => "low",
		"name" => "Low",
		"permissions" => [
		"detail_user.index" => true,
		"detail_user.create" => true,
		"detail_user.store" => true,
		"detail_user.show" => true,
		"detail_user.edit" => true,
		"detail_user.update" => true
	]
	];
	Sentinel::getRoleRepository()->createModel()->fill($role_low)->save();
	$lowrole = Sentinel::findRoleByName('Low');
	$user_low = ["email"=>"lowuser@mail.com", "password"=>"12345678"];
	$lowuser = Sentinel::registerAndActivate($user_low);
	$lowuser->roles()->attach($lowrole);
    }
}
