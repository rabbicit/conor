<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('songwriters');
            $table->string('explicit_content');
            $table->decimal('price');
            $table->string('producer')->nullable();
            $table->string('featured_artist')->nullable();
            $table->string('instrumental');
            $table->string('file_name');
            $table->string('url')->nullable();
            $table->bigInteger('album_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('album_id')->references('id')->on('albums')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tracks');
    }
}
