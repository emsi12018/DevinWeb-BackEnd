<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCityDeliverytimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_deliverytimes', function (Blueprint $table) {
            $table->timestamps();
            $table->bigInteger('city_id')->nullable()->unsigned();
            $table->bigInteger('deliverytime')->nullable()->unsigned();
            $table->foreign('city_id')->references('id')->on('cities')
                ->onDelete('cascade');
            $table->foreign('deliverytime')->references('id')->on('deliverytimes')
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
        Schema::dropIfExists('city_deliverytimes');
    }
}
