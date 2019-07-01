<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer(['FirstMidName' => 'Customer1', 'LastName' => 'Test', 'HomePhoneNumber' => '658265632',
            'WorkPhoneNumber' => '482975272658', 'MobilePhoneNumber' => '8795827591', 'Address' => 'Address1',
            'Email' => 'customer1@gmail.com', 'Password' => '@Test1234', 'IsSignedIn' => False, 'Enabled' => True,
            ]);
        $customer->save();
    }
}
