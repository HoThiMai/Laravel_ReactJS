<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'name'=>'Mai Thi Nga',
                'email'=>'mainga@gmail.com',
                'address'=>'Bo Trach - Quang Binh',
                'phone_number'=>'(+84) 353 274 2386',
                'gender'=>'Female',
                'note'=>'VIP Customer'
            ],
            [
                'name'=>'Nguyen Duy Ngoc',
                'email'=>'ngocnguyen@gmail.com',
                'address'=>'101B Le Huu Trac - Son Tra - Da Nang',
                'phone_number'=>'(+84) 365 465 8733',
                'gender'=>'Male',
                'note'=>'Loyal Customer'
            ],
            [
                'name'=>'Hoang Thi Diu',
                'email'=>'diuhoang@gmail.com',
                'address'=>'99 To Hien Thanh - Son Tra - Da Nang',
                'phone_number'=>'(+84) 826 457 2974',
                'gender'=>'Female',
                'notes'=>'Normal Customer'
            ],
            [
                'name'=>'Nguyen Thi Nguyet',
                'email'=>'nguyetnguyen@gmail.com',
                'address'=>'Quang Tri',
                'phone_number'=>'(+84) 274 453 7547',
                'gender'=>'Female',
                'notes'=>'VIP Customer'
            ],
            [
                'name'=>'Ha Vu Thuat',
                'email'=>'thuatha@gmail.com',
                'address'=>'Ha Noi',
                'phone_number'=>'(+84) 647 183 7563',
                'gender'=>'Male',
                'note'=>'Normal Customer'
            ],
            [
                'name'=>'Nguyen Huong Ngoc Tram',
                'email'=>'ngoctram@gmail.com',
                'address'=>'Quang Ngai',
                'phone_number'=>'(+84) 764 972 6453',
                'gender'=>'Female',
                'note'=>'Loyal Customer'
            ],
            [
                'name'=>'Nguyen Thi Hoang Huong',
                'email'=>'hoanghuong@gmail.com',
                'address'=>'Quang Nam',
                'phone_number'=>'(+84) 752 856 4862',
                'gender'=>'Female',
                'note'=>'Normal Customer'
            ]
        ]);
    }
}
