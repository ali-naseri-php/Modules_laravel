<?php

namespace Modules\Account\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Account\Models\User;

class AccountSeeder extends Seeder
{
    public function run()
    {
        // مثال: تولید کاربران فیک
        User::factory()->count(10)->create();
    }
}
