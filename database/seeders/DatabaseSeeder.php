<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
                        \Modules\Article\Database\Seeders\ArticleSeeder::class, // سیدر ماژول Article
                        \Modules\Account\Database\Seeders\AccountSeeder::class, // سیدر ماژول Account
                        \Modules\Category\Database\Seeders\CategorySeeder::class, // سیدر ماژول Category
                    ]);
    }
}
