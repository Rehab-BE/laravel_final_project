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
            'title'=> fake()->randomElement(['machine', 'codes', 'relatives']),
            'category_name'=>fake()->randomElement(['Web development', 'Social Media']),
            'content'  =>fake()->text(),
            'no_of_view' =>fake()->randomNumber(),
            'published' => fake()->numberBetween(0, 1),
            'trending' =>fake()->boolean() ,
            'image' =>basename(fake()->image(public_path('assests_admin/image/topic'))) ,
        ];
    }
}
