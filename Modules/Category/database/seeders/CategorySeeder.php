<?php

namespace Modules\Category\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Category\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->count(10)->create()->each(function ($category) {
            // تولید 3 دسته‌بندی فرزند برای هر دسته‌بندی اصلی
            Category::factory()->count(3)->create([
                                                      'parent_category' => $category->id,
                                                  ]);
        });
    }
}
