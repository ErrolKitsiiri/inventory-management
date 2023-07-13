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
            'name' => $this->faker->word(),
            'quantity' => $this->faker->numberBetween(1000, 10000),
            'price' => $this->faker->numberBetween(100, 1000),
            'purchase_date' => $this->faker->date(),
            'product_category_id' => $this->faker->numberBetween(1, 10),
            'vendor_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
