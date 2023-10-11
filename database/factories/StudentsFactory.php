<?php

namespace Database\Factories;

use App\Models\Groups;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word(5),
            'surname' => $this->faker->unique()->word(5),
            'group_id' => Groups::class
        ];
    }
}
