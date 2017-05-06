<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('roles')->insert(['id' => 1000, 'name' => 'administrator']);
		DB::table('roles')->insert(['id' => 800, 'name' => 'moderator']);
		DB::table('roles')->insert(['id' => 100, 'name' => 'member']);
    }
}
