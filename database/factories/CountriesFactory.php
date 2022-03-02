<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Countries;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\countries>
 */
class CountriesFactory extends Factory
{
    protected $model = countries::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'country' => $this->faker->country(),   
        ];
    }
}
