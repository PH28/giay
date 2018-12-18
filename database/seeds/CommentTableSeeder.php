<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            
            [  'id'=>1,
                'content'=>'Giày đẹp quá',
                'user_id'=>2,
                'product_id'=>3
            ],
            
            

            [  'id'=>2,
                'content'=>'Giày đẹp quá, giao hàng nhanh',
                'user_id'=>2,
                'product_id'=>3
            ]    
            
        ]);
    }
}
