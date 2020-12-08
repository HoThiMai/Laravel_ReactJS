<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BillDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bill_details')->insert([
            [
                'id_bill'=>1,
                'id_pro'=>2,
                'id_size'=>1,
                'quantity_pro'=>3,
                'rental_time'=>5
            ],
            [
                'id_bill'=>1,
                'id_pro'=>6,
                'id_size'=>1,
                'quantity_pro'=>1,
                'rental_time'=>3
            ],
            [
                'id_bill'=>2,
                'id_pro'=>2,
                'id_size'=>1,
                'quantity_pro'=>9,
                'rental_time'=>5
            ],
            [
                'id_bill'=>3,
                'id_pro'=>8,
                'id_size'=>1,
                'quantity_pro'=>2,
                'rental_time'=>4
            ],
            [
                'id_bill'=>4,
                'id_pro'=>1,
                'id_size'=>1,
                'quantity_pro'=>7,
                'rental_time'=>5
            ],
            [
                'id_bill'=>5,
                'id_pro'=>10,
                'id_size'=>1,
                'quantity_pro'=>6,
                'rental_time'=>4
            ],
            [
                'id_bill'=>6,
                'id_pro'=>4,
                'id_size'=>1,
                'quantity_pro'=>1,
                'rental_time'=>5
            ],
            [
                'id_bill'=>5,
                'id_pro'=>1,
                'id_size'=>1,
                'quantity_pro'=>8,
                'rental_time'=>5
            ],
            [
                'id_bill'=>6,
                'id_pro'=>3,
                'id_size'=>1,
                'quantity_pro'=>2,
                'rental_time'=>3
            ]
        ]);
    }
}
