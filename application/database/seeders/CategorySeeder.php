<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categoriesData = json_decode(\Storage::disk('initial-data')->get('categories.json'),JSON_OBJECT_AS_ARRAY);
        Category::insert($categoriesData);
    }
}
