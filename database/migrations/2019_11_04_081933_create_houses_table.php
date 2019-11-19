<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('location_id');
            $table->string('name');
            $table->string('images');
            $table->string('price');
            $table->string('address');
            $table->integer('wide');
            $table->integer('length');
            $table->string('electricity')->nullable();
            $table->string('certificate')->nullable();
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('living_room');
            $table->integer('kitchen');
            $table->string('floorplan');
            $table->string('garage');
            $table->text('description');
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
        Schema::dropIfExists('houses');
    }
}
