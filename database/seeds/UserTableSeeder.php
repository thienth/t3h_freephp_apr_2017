<?php

use Illuminate\Database\Seeder;
// use DB;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$users = [
    		['name' => 'admin', 'email' => 'admin@blog.com', 'role_id' => 1000, 'password' => Hash::make('123456')],
    		['name' => 'mod', 'email' => 'mod@blog.com', 'role_id' => 800, 'password' => Hash::make('123456')],
    	];

    	foreach ($users as $value) {
    		DB::table('users')->insert($value);
    	}
        

    }
}
