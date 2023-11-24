<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Area;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\area>
 */
class AreaFactory extends Factory
{
    protected $model = Area::class;
    public function definition(): array
    {
        $name = $this->faker->unique()->word(10);
        return [
            'name' => $name,
        ];
    }
}
