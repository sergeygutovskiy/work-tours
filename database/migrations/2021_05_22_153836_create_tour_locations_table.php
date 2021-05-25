<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_locations', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("tour_info_id")->unsigned()->index();

            $table->string("name");
            $table->string("image_path");
            $table->text("description");
            $table->boolean("big_image");

            $table->timestamps();

            $table->foreign('tour_info_id')->references('id')->on('tour_infos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tour_locations');
    }
}
