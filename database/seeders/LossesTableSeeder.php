<?php

namespace Database\Seeders;

use App\Models\Loss;
use App\Models\ObjectRessource;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class LossesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Loss::factory()->count(10)
            ->state(new Sequence(
                function ($sequence) {
                    return [
                        'user_id' => User::all()->random(),
                        'object_ressource_id' => ObjectRessource::all()->random(),
                        'object_state' => ['neuf(ve)', 'abime(e)'][rand(0, 1)]
                    ];
                }
            ))->create();
    }
}
