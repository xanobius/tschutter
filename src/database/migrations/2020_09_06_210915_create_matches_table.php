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
            $table->integer('points_one')->default(0);
            $table->integer('points_two')->default(0);
            $table->timestamps();
        });

        Schema::create('match_has_users', function(Blueprint $table) {
           $table->unsignedBigInteger('user_id');
           $table->unsignedBigInteger('match_id');
           $table->tinyInteger('team');

           $table->foreign('user_id')
               ->references('id')
               ->on('users')
               ->onDelete('cascade');

           $table->foreign('match_id')
               ->references('id')
               ->on('matches')
               ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('match_has_users');
        Schema::dropIfExists('matches');
    }
}
