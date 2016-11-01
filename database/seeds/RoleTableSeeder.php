<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
        	'name' => 'admin',
        	'display_name' => 'Administrator',
        	'description' => 'User is allowed to manage and edit other users',
        	]);        
    }
}
