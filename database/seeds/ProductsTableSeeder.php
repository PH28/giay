<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
          [
            'id'=>1,
            'categories_id'=>1,
            'name'=>"Giày Sneaker 1",
            'content'=>"Giày Sneaker 1 với thiết kế đơn giản, đẹp mắt, mang đi chơi với bạn bè.
                            - Chất liệu: Vải nỉ phối da tổng hợp
                            - Chất liệu đế: Cao su",
                'image'=>"photo",
                'price'=>'10000',
                'quantity'=>2
                         
          ],

          [
            'id'=>2,
            'categories_id'=>2 ,
            'name'=>"Giày Cổ Cao 1",
            'content'=>"Giày Cổ Cao 1 với thiết kế đơn giản, đẹp mắt, mang đi chơi với bạn bè.
                            - Chất liệu: Vải nỉ 
                            - Chất liệu đế: Cao su",
                'image'=>"photo",
                'price'=>'20000',
                'quantity'=>11
                          
          ],
          
          [
            'id'=>3,
            'categories_id'=>3,
            'name'=>"Giày Thể Thao 1",
            'content'=>"Giày Thể Thao 1 mang đến phong cách năng động của tuổi trẻ, dễ dàng kết hợp được mọi trang phục mà vẫn rất thời trang.
                            - Chất liệu: Vải cao cấp, bền bỉ theo thời gian
                            - Chất liệu đế: Cao su",
                'image'=>"photo",
                'price'=>'30000',
                'quantity'=>12
                       
          ],
          

        ]);
    }
}
