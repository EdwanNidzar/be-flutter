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
        // Create a random image and store it in the public storage
        $imagePath = $this->faker->image(storage_path('app/public/posts'), 640, 480, null, false);
    
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'image' => $imagePath,
        ];
    }
}
