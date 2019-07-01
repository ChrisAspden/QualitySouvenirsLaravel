<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category(['name' => 'MaoriGifts']);
        $category->save();

        $category = new Category(['name' => 'T-Shirts']);
        $category->save();

        $category = new Category(['name' => 'Mugs']);
        $category->save();
    }
}
