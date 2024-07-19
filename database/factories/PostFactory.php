<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Category;
use App\Models\Profile;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
			'title' => fake()->sentence(5),
			'content' => fake()->text(),
			'description' => fake()->text(50),
			'published_at' => fake()->date,
			'image_path' => fake()->imageUrl(),
			'status' => 1,
			'profile_id' => Profile::first()->id,
			'category_id' => Category::inRandomOrder()->first()->id,
        ];
    }
}