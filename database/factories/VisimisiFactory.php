<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Visimisi>
 */
class VisimisiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'body' => $this->faker->paragraph(mt_rand(3,5)),
            // 'user_id' => mt_rand(1,3)
        ];
    }
}
