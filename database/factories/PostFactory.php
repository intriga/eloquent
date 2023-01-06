<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

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
    public function definition()
    {
        $name = $this->fake()->sentense();        
        return [
            'name'          => $name,
            'category_id'   => Post::factory()->rand(1,4),
            'user_id'       => Post::factory()->rand(1,5)
        ];
    }
}
