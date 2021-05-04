<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'Sản phẩm chính';
        $category->save();

        $category = new Category();
        $category->name = 'Sản phẩm bổ trợ';
        $category->save();
    }
}
