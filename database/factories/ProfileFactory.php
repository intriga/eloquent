<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $socialNetwork = $this->faker->word(5);
        return [
            'instagram' => $socialNetwork,
            'github' => $socialNetwork,
            'web' => $socialNetwork,
        ];
    }
}
