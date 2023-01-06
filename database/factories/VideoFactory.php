<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Video;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker()->sentence();
        return [
            'name' => $name,
            'category_id' => video::factory()->rand(1,4),
            'user_id' => video::factory()->rand(1,5)
        ];
    }
}
