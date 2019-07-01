<?php

use Illuminate\Database\Seeder;
use App\Administrator;

class AdministratorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Administrator(['AdminLoginName' => 'Admin', 'AdminPassword' => '@Test1234']);
        $admin->save();
    }
}
