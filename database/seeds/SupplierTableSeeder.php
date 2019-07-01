<?php

use Illuminate\Database\Seeder;
use App\Supplier;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplier = new Supplier(['name' => 'Mountain Jade', 'HomePhoneNumber' => '12345678',
            'WorkPhoneNumber' => '87654321', 'MobilePhoneNumber' => '321654987', 'Email' => 'info@mountainjade.co.nz']);
        $supplier->save();

        $supplier = new Supplier(['name' => 'Mr Vintage', 'HomePhoneNumber' => '12345678',
        'WorkPhoneNumber' => '87654321', 'MobilePhoneNumber' => '321654987', 'Email' => 'info@mrvintage.co.nz']);
        $supplier->save();

        $supplier = new Supplier(['name' => 'Simply New Zealand', 'HomePhoneNumber' => '12345678',
            'WorkPhoneNumber' => '87654321', 'MobilePhoneNumber' => '321654987', 'Email' => 'info@simplynz.co.nz']);
        $supplier->save();
    }
}
