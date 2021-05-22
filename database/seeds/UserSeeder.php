<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'name'=>'admin',
        'email'=>'admin@gmail.com',
        'password'=>bcrypt('123456'),
        'role'=>'0'
        ]);

        DB::table('users')->insert([
            'name'=>'trang',
            'email'=>'trang@gmail.com',
            'password'=>bcrypt('123456'),
            'role'=>'0'
        ]);
        DB::table('users')->insert([
            'name'=>'huong',
            'email'=>'huong@gmail.com',
            'password'=>bcrypt('123456'),
            'role'=>'0'
        ]);

    }
}