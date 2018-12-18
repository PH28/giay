<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(OrderDetailTableSeeder::class);
        $this->call(ProductDetailTableSeeder::class);	
       
      
        
    }
}
