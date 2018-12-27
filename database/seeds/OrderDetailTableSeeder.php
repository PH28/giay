<?php

use Illuminate\Database\Seeder;

class OrderDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders_detail')->insert([
        [
                'id'=>1,
                 'order_id'=>1,
                 'product_id'=>1,
                 'quantity'=>2,
                'price'=>'10000'

        ],

                ['id'=>2,
                 'order_id'=>2,
                 'product_id'=>2,
                 'quantity'=>11,
                'price'=>'20000'
                ],
         ]);       
    }
}
