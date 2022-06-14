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
//               $table->boolean('cancelled')->default(false);
//            $table->boolean('approved_owner')->default(false);
//            $table->boolean('completed')->default(false);
//
//            $table->foreignId('loss_id')->constrained("losses");
//            $table->foreignId('found_loss_id')->constrained("found_losses");
            'cancelled' => false,
            'approved_owner' => false,
            'completed' => false,
            'loss_id' => $this->faker->numberBetween(1, 10),
            'found_loss_id' => $this->faker->numberBetween(1, 10),

        ];
    }
}
