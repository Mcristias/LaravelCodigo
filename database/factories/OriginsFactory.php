<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Origins;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\origins>
 */
class OriginsFactory extends Factory
{
    protected $model = origins::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'origin' => $this->faker->name(),      
        ];
    }
}
