<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name'        => fake()->name(),
            'testimonial' => fake()->paragraph(1),
            'avatar'      => null,
            'position'    => fake()->sentence(1),
            'job'         => fake()->jobTitle()
        ];
    }
}
