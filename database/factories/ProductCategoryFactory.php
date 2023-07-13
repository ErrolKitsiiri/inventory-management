<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductCategory>
 */
class ProductCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique->randomElement(
                [
                    'Modern','Traditional','Contemporary','Industrial','Transitional','Rustic','Bohemian', 'Minimalist', 'Hollywood Regency', 'Scandinavian'
                ]
            ),
            // 'name' =>$this->faker->category(),
            'description'=> $this->faker->text(200),
        ];
    }
}
