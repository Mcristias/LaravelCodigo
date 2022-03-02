<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Wines;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\wines>
 */
class WinesFactory extends Factory
{
    protected $model = wines::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),    
            'country_id'=>random_int(1, 10),        
            'category_id'=>random_int(1, 10),        
            'origin_id'=>random_int(1, 10),        
        ];
    }
}
