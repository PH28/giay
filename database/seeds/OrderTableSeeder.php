<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('orders')->insert([
            [
                'id'=>1,
                'user_id'=>2,
                'receiver_name'=>'Anh',
                'total'=>10000,
                'date'=>date_create(),
                'phone'=>123456789,
                'address'=>'Số 1 Võ Như Hưng Đà Nẵng',
                'status'=>1
            ],
            [
               'id'=>2,
                'user_id'=>3,
                'receiver_name'=>'An',
                'total'=>10000,
                'date'=>date_create(),
                'phone'=>12221111,
                'address'=>'Số 2 Võ Như Hưng Đà Nẵng',
                'status'=>1 
            ]

          
        ]);
    }
}
