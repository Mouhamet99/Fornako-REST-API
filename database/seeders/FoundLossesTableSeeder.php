<?php

namespace Database\Seeders;

use App\Models\FoundLoss;
use App\Models\ObjectRessource;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class FoundLossesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         FoundLoss::factory()->count(10)
            ->state(new Sequence(
                function ($sequence) {
                    return [
                        'user_id' => User::all()->random(),
                        'object_ressource_id' => ObjectRessource::all()->random(),
                        'object_state'=> ['neuf(ve)', 'abime(e)'][rand(0,1)]
                    ];
                }
            ))->create();
    }
}
