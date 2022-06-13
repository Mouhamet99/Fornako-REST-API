<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateLossesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('losses', function (Blueprint $table) {
            $table->id();
              $table->string('name')->default('');
            $table->string('object_state')->default('');
            $table->string('object_description')->default('');
            $table->string('object_image')->default('');
            $table->string('location')->default('');
            $table->date('date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreignId('user_id')->constrained("users");
            $table->foreignId('object_ressource_id')->constrained("object_ressources");

            $table->boolean('found')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loss_declarations');
    }
}
