<?php

namespace Modules\Article\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactoryFactory extends Factory
{



    protected $model = \Modules\Article\Entities\Article::class;
    public function definition(): array
    {

        return [
            'image' => 'default.jpg', // عکس ثابت
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraphs(3, true), // تولید سه پاراگراف متن
        ];
    }
}

