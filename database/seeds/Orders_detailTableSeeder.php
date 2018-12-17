<?php

use Illuminate\Database\Seeder;

class Orders_detailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders_detail')->insert([
            
                'id'=>1,
                 'orders_id'=>1,
                 'products_id'=>1,
                 'quantity'=>2,
                'price'=>'10000'
                
               
           

        ]);
    }
}
