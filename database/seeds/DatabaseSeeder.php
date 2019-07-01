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
         $this->call(SupplierTableSeeder::class);
         $this->call(CategoryTableSeeder::class);
         $this->call(SouvenirTableSeeder::class);
         $this->call(CustomerTableSeeder::class);
         $this->call(AdministratorTableSeeder::class);
    }
}
