<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categories;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\categories>
 */
class CategoriesFactory extends Factory
{

    protected $model = categories::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category' => $this->faker->name(),            
        ];
    }
}
