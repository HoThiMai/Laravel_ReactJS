<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
            [
                'name'=>'hungnguyen',
                'email'=>'vanhung.nguyen@gmail.com',
                'password'=>Hash::make('nguyenhung13'),
                'role'=>'admin'
            ],
            [
                'name'=>'tramnguyen',
                'email'=>'ngoctram.nguyen@gmail.com',
                'password'=>Hash::make('tram234'),
                'role'=>'user'
            ],
            [
                'name'=>'thuatha',
                'email'=>'thuatha.nguyen@gmail.com',
                'password'=>Hash::make('thuat123'),
                'role'=>'user'
            ],
            [
                'name'=>'yennhi',
                'email'=>'nhinguyen.nguyen@gmail.com',
                'password'=>Hash::make('nhi123'),
                'role'=>'user'
            ],
            [
                'name'=>'manh',
                'email'=>'manhnguyen.nguyen@gmail.com',
                'password'=>Hash::make('manh432'),
                'role'=>'user'
            ]
        ]);
    }
}
