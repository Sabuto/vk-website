<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_photos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('site_id')->unsigned();
            $table->foreign('site_id')->references('id')->on('sites')->onDelete('cascade');

            $table->string('name');
            $table->string('path');
            $table->string('thumbnail_path');
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
        Schema::drop('site_photos');
    }
}
