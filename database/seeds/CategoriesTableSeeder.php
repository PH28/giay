<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	[
	        	'id'=>1,
	        	'name'=>'Giày Sneaker',
	        	'parent_id'=>1
	        ],	

	        [
	        	'id'=>2,
	        	'name'=>'Giày Cổ Cao ',
	        	'parent_id'=>2
	        ],

	        [
	        	'id'=>3,
	        	'name'=>'Giày Thể Thao',
	        	'parent_id'=>3
	        ],
        ]);
    }
}
