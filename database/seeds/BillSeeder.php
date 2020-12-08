<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bills')->insert([
            [
                'id_cus'=>1,
                'date'=>'2020-07-06',
                'total_price'=>1500000,
                'payment'=>'COD',
                'note'=>'Delivery in outside'
            ],
            [
                'id_cus'=>4,
                'date'=>'2020-09-11',
                'total_price'=>2500000,
                'payment'=>'COD',
                'note'=>'Delivery in outside'
            ],
            [
                'id_cus'=>2,
                'date'=>'2020-08-20',
                'total_price'=>800000,
                'payment'=>'COD',
                'note'=>'Delivery in outside'
            ],
            [
                'id_cus'=>3,
                'date'=>'2020-01-06',
                'total_price'=>900000,
                'payment'=>'COD',
                'note'=>'Delivery in outside'
            ],
            [
                'id_cus'=>3,
                'date'=>'2020-05-29',
                'total_price'=>2600000,
                'payment'=>'COD',
                'note'=>'Delivery in outside'
            ],
            [
                'id_cus'=>1,
                'date'=>'2020-08-20',
                'total_price'=>650000,
                'payment'=>'COD',
                'note'=>'Delivery in outside'
            ]
        ]);
    }
}
