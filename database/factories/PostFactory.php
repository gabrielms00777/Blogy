<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $title = $this->faker->sentence;
        return [
            'user_id' => 1,
            'title' => $title,
            'content' => $this->faker->paragraphs(3, true),
            'draft' => $this->faker->boolean,
            'image' => $this->faker->imageUrl(640, 480),
            'slug' => Str::slug($title),
        ];
    }
}
