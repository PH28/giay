<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            
                'id'=>1,
                'users_id'=>2,
                'receiver_name'=>'Anh',
                'total'=>10000,
                'date'=>date_create(),
                'phone'=>123456789,
                'address'=>'Số 1 Võ Như Hưng Đà Nẵng',
                'status'=>'Chờ xác nhận'
            

          
        ]);
    }
}
