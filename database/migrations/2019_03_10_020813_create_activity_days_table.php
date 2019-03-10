<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_days', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->time('start_hour');
            $table->string('duration', 5);
            $table->integer('activity_id')->unsigned();
            $table->foreign('activity_id')->references('id')->on('activities');           
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
        Schema::dropIfExists('activity_days');
    }
}
