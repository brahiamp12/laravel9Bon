<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'reference' => $this->faker->unique()->bothify('REF-####-????'),
            'cost' => $this->faker->randomFloat(2, 1, 800),
            'type' => $this->faker->randomElement(['simple', 'composite']),
            'composed' => false,
            'active' => true,
            'for_sale' => true,
            'stockable' => true,            
        ];
    }
}
