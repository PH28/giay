<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            
                'id'=>1,
                'content'=>'Giày đẹp quá',
                'users_id'=>1,
                'products_id'=>1
            
        ]);
    }
}
    