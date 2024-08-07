<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    public function definition(): array
    {
        return [
            'blog_category_id' => rand(1, 7),
            'title'            => $this->faker->sentence,
            'thumbnail'        => null,
            'content'          => $this->faker->paragraph,
            'author'           => $this->faker->name,
            'published_date'   => $this->faker->date(),
            'view_count'       => $this->faker->numberBetween(0, 100),
            'slug'             => $this->faker->slug,
        ];
    }
}
