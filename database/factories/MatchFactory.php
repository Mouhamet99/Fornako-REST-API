<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MatchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'cancelled' => false,
            'approved_owner' => false,
            'completed' => false,
            'loss_id' => $this->faker->numberBetween(1, 10),
            'found_loss_id' => $this->faker->numberBetween(1, 10),

        ];
    }
}
