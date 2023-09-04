<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'title' => $this->faker->jobTitle(),
            'phone_number' => $this->faker->phoneNumber,
            'user_profile' => $this->faker->imageUrl,
            'post_img' => $this->faker->imageUrl,
            'post_sentence' => $this->faker->sentence,
        ];
    }
}