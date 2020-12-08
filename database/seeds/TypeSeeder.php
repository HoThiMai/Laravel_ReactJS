<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_types')->insert([
            [
                'name'=>'A-Line'
            ],
            [
                'name'=>'Ball Grown'
            ],
            [
                'name'=>'MerMaid'
            ],
            [
                'name'=>'Drop Waist'
            ],
            [
                'name'=>'Column'
            ],
            [
                'name'=>'Man Vest'
            ],
            [
                'name'=>'Ao Dai'
            ]
        ]);
    }
}
