<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    for ($i = 1; $i <= 10; $i++) {
			DB::table('users')->insert([
				'name' => str_random(10),
				'email' => str_random(10).'@gmail.com',
				'password' => bcrypt('secret'),
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s")
			]);	
		}
    }
}
