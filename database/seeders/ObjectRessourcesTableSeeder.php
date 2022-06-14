<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\ObjectRessource;
use Database\Factories\ObjectRessourceFactory;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class ObjectRessourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ObjectRessource::factory()->count(10)->state(new Sequence(
            function ($sequence) {
                return ['category_id' => Category::all()->random()];
            }
        ))->create();

    }
}
