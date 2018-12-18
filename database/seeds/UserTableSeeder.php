<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            ['id'=>1,
                'name'=>"admin",
                'email'=>"admin@gmail.com",
                'password'=>bcrypt("0123456789"),
                'phone'=>"012345678",
                'address'=>"Quang Nam",
                'user_type'=>1],
            ['id'=>2,
                'name'=>"Anh",
                'email'=>"a@gmail.com",
                'password'=>bcrypt("123456"),
                'phone'=>"01223539732",
                'address'=>"Quang Ngai",
                'user_type'=>0],
            [
                'id'=>3,
                'name'=>"An",
                'email'=>"an@gmail.com",
                'password'=>bcrypt("123456"),
                'phone'=>"0122353973",
                'address'=>"Quang Ngai",
                'user_type'=>0
            ]    

            
        ]);

    }
}
