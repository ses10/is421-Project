<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        User::create([
        	'username' => 'ds646',
        	'password' => bcrypt('qwerty'),
            'firstName' => 'Dennis',
            'lastName' => 'Sesma'
        	]);
        User::create([
            'username' => 'bob',
            'password' => bcrypt('bob'),
            'firstName' => 'Bob',
            'lastName' => 'Bobbinson'
            ]);
    }
}
