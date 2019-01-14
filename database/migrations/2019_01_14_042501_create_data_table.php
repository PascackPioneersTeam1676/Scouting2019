<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('match_num');
            $table->integer('team_num');
            $table->string('alliance', 191);
            $table->integer('starting_point');
            $table->string('driving_sandstorm_type', 191);
            $table->integer('rocket_hatches');
            $table->integer('rocket_balls');
            $table->integer('cargo_hatches');
            $table->integer('cargo_balls');
            $table->integer('end_position');
            $table->integer('red_score');
            $table->integer('blue_score');
            $table->integer('end_status');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data');
    }
}
