<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ObjectRessourceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
//        $faker = \Faker\Factory::create('fr_FR');
        return [
            'name' => $this->faker->unique()->word,
            'image' => $this->faker->imageUrl(300, 300),
            'category_id' => $this->faker->numberBetween(1, 100)
        ];
    }
}
