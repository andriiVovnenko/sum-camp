<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscribersToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribers_tours', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->integer('subscriber_id');
            $table->foreign('subscriber_id')->references('id')->on('subscribers');
            $table->integer('tour_id');
            $table->foreign('tour_id')->references('id')->on('tours');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscribers_tours');
    }
}
