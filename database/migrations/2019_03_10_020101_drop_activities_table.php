<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('activities');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category', 50);
            $table->string('description', 255);
            $table->string('search_center', 45);
            $table->timestamps();
        });
    }
}
