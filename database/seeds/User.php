<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('users')->insert([
                'role_id'=>1,
               'name'=>'Admin123',
               'username'=>'admin',
               'email'=>'admin@gmail.com',
               'password'=>bcrypt('rootadmin')

          ]);

          DB::table('users')->insert([
            'role_id'=>2,
            'name'=>'Author123',
            'username'=>'author',
            'email'=>'author@gmail.com',
            'password'=>bcrypt('rootadmin'),

       ]);

    
    }
}
