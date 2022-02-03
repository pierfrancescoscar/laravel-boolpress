<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['HTML', 'CSS', 'JavaScript', 'PHP'];

        foreach ($categories as $category) {

            $new_category = new Category();

            $new_category->title = $category;
        }
    }
}
