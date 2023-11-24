<?php

namespace Database\Factories;

use App\Models\Area;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->word(20);
        return [
            'name' => $name,
            'email' => $this->faker->unique()->safeEmail(),
            'sex' => $this->faker->randomElement(['M', 'F']),
            'area_id' => Area::factory(),
            'boletin' => $this->faker->numberBetween(0, 1),
            'description' => $this->faker->paragraph,
        ];
    }
}
