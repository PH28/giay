<?php

use Illuminate\Database\Seeder;

class ProductDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products_detail')->insert([
          [
            'id'=>1,
            'color'=>'Đen ; Đỏ ; Tím',
            'size'=>'40;41;42;43',
            'product_id'=>1
          ],

          [
            'id'=>2,
            'color'=>'Đen ; Đỏ ; Tím',
            'size'=>'40;41;42;43',
            'product_id'=>2
          ],
       ]); 
    }
}
