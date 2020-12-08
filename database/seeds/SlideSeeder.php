<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('slides')->insert([
            [
                'id'=>1,
                'image'=>'banner1.jpg'
            ],
            [
                'id'=>2,
                'image'=>'banner5.jpg'
            ],
            [
                'id'=>3,
                'image'=>'banner3.jpg'
            ],
            ]);
    }
}
