<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topic>
 */
class TopicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word(),
            'cate_name'=>fake()->word(),
            'content'=>fake()->text(),
            'no_of_view'=>fake()->randomNumber(),
            'published' => fake()->boolean(),
            'trending' => fake()->boolean(),
            'image' => basename(fake()->image(public_path('assets_admin/test_image/topic'))),
            'category_id' => fake()->numberBetween(1, 5),
        ];
    }
}
