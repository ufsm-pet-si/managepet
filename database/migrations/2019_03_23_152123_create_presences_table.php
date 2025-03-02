<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('activity_day_id')->unsigned();
            $table->foreign('activity_day_id')->references('id')->on('activity_days')->onDelete('cascade');
            $table->integer('participant_id')->unsigned();
            $table->foreign('participant_id')->references('id')->on('participants')->onDelete('cascade');
	        $table->boolean('presence_mark');
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
        Schema::dropIfExists('presences');
    }
}
