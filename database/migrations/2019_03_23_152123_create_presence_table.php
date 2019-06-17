<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presence', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('activity_day_id')->unsigned();
            $table->foreign('activity_day_id')->references('id')->on('activity_days');
            $table->integer('participant_id')->unsigned();
            $table->foreign('participant_id')->references('id')->on('participants');
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
        Schema::dropIfExists('presence');
    }
}
