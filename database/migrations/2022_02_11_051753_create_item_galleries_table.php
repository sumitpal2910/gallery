<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_galleries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');

            $table->unsignedBigInteger('album_id')->default(1);
            $table->foreign('album_id')->references('id')->on('albums');

            $table->string('path');
            $table->tinyInteger('path_type')->default(1)->comment("1=>local 2=>external");
            $table->tinyInteger('type')->default(1)->comment("1=>image 2=>video");
            $table->string('cover_image')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('ordering')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->softDeletes();
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
        Schema::dropIfExists('item_galleries');
    }
}
