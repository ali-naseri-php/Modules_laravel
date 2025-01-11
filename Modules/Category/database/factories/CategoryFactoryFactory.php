<?php

namespace Modules\Category\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactoryFactory extends Factory
{
    protected $model = \Modules\Category\Entities\Category::class;

    public function definition()
    {
        return [
            'images' => 'default.jpg', // عکس ثابت
            'name' => $this->faker->word,
            'parent_category' => null, // پیش‌فرض والد ندارد
        ];
    }
}

