<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FoundLossFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'title' => $this->faker->unique()->sentence(6),
        'object_state' => $this->faker->word,
        'object_description' => $this->faker->sentence(10),
        'object_image' => $this->faker->imageUrl(300, 300),
        'location' => $this->faker->city,
        'date' => $this->faker->dateTimeBetween('-1 years', 'now'),
        'user_id' => $this->faker->numberBetween(1, 100),
        'object_ressource_id' => $this->faker->numberBetween(1, 100),
        'returned' => false

        ];
    }
}
