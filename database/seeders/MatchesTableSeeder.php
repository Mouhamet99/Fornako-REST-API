<?php

namespace Database\Seeders;

use App\Models\FoundLoss;
use App\Models\Loss;
use App\Models\Match;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//
        Match::factory()->count(4)
            ->state(new Sequence(
                function ($sequence) {
                    return ['loss_id' => Loss::all()->random(), 'found_loss_id' => FoundLoss::all()->random()];
                },
            ))
            ->create();
    }
}
