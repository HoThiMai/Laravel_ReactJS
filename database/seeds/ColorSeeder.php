<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            [
                'name'=>'Light Beige'
            ],
            [
                'name'=>'Red'
            ],
            [
                'name'=>'Pastel Pink'
            ],
            [
                'name'=>'White'
            ],
            [
                'name'=>'Grey'
            ],
            [
                'name'=>'Blue'
            ]
        ]);
    }
}
