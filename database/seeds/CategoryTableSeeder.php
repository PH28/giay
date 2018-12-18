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
         DB::table('categories')->insert([
        	[
	        	'id'=>1,
	        	'name'=>'Giày Sneaker',
	        	
	        ],	

	        [
	        	'id'=>2,
	        	'name'=>'Giày Cổ Cao ',
	        	
	        ],

	        [
	        	'id'=>3,
	        	'name'=>'Giày Thể Thao',
	        	
	        ]
        ]);
    }
}
