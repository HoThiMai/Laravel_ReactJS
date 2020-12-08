<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CustomerSeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(SizeSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(ProductSeeder::class);  
        $this->call(UserSeeder::class);    
        $this->call(BillSeeder::class);
        $this->call(BillDetailSeeder::class);   
        $this->call(ProductSizeSeeder::class);
        $this->call(SlideSeeder::class);
    }
}
