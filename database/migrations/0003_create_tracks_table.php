<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->string('imageUrl');
            $table->double('duration');
            $table->unsignedBigInteger('typeId');
            $table->foreign('typeId')->references('id')->on('types');
            $table->unsignedBigInteger('artistId');
            $table->foreign('artistId')->references('id')->on('artists');
            $table->unsignedBigInteger('albumId');
            $table->foreign('albumId')->references('id')->on('albums');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracks');
    }
};
