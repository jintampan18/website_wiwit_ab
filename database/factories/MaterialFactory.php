<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Material>
 */
class MaterialFactory extends Factory
{
    public function definition(): array
    {
        return [
            'material_category_id' => rand(2, 3),
            'title'                => fake()->title(),
            'thumbnail'            => null,
            'file'                 => null,
            'author'               => fake()->name(),
            'download_count'       => rand(20, 1000),
            'published_date'       => fake()->date()
        ];
    }
}
