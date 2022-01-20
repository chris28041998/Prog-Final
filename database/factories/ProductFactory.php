<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

use function PHPSTORM_META\map;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->title(),
            'price'=> $this->faker->unique()->numberBetween(1,20),
            'description' => $this->faker->sentence(70),
            'category_id' => Category::all()->random()->id,
        ];
    }
}
