<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gembalasidang>
 */
class GembalasidangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'slug' => $this->faker->slug(),
            'body' => $this->faker->paragraph(mt_rand(1,2)),
            // 'user_id' => mt_rand(1)
        ];
    }
}
