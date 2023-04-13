<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;



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
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'slug' => $this->faker->slug,
            'excerpt' => $this->faker->text($maxNbChars = 200),
            'body' => $this->faker->paragraphs($nb = 3, $asText = true),
        ];
    }
}
