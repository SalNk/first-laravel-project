<?php

namespace Database\Factories;

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
            'user_profile' => $this->faker->imageUrl,
            'post_img' => $this->faker->imageUrl,
            'post_title' => $this->faker->sentence,
            'post_sentence' => $this->faker->text,
        ];
    }
}
