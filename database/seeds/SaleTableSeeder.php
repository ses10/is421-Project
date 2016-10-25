<?php

use Illuminate\Database\Seeder;
use App\Sale;

class SaleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sale::create([
        	'username' => 'ds646',
        	'vin' => 'ad8f93fjjjfj3w98'
        	]);
        Sale::create([
        	'username' => 'ds646',
        	'vin' => 'f832q8dj23jj2io3'
        	]);
    }
}
