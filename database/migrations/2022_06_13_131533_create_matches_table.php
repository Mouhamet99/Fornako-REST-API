<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->boolean('cancelled')->default(false);
            $table->boolean('approved_owner')->default(false);
            $table->boolean('completed')->default(false);

            $table->foreignId('loss_id')->constrained("losses");
            $table->foreignId('found_loss_id')->constrained("found_losses");
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
        Schema::dropIfExists('matches');
    }
}
