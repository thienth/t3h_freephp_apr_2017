<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
        	['name' => 'Đời sống', 'parent_id' => 0],
        	['name' => 'Xã hội', 'parent_id' => 0],
        	['name' => 'Thể thao', 'parent_id' => 0],
        	['name' => 'Quốc tế', 'parent_id' => 0],
        	['name' => 'Sức khoẻ', 'parent_id' => 0],
        	['name' => 'Công nghệ', 'parent_id' => 0],
        ];

        foreach($categories as $value){
        	DB::table('categories')->insert($value);
        }
    }
}
