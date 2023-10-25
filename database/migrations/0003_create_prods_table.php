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
        Schema::create('prods', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->string('imageUrl');
            $table->string('duration');
            $table->integer('countListening')->default(0);
            $table->unsignedBigInteger('beatmaker_id');
            $table->foreign('beatmaker_id')->references('id')->on('beatmakers');
            $table->unsignedBigInteger('pack_id')->nullable();
            $table->foreign('pack_id')->references('id')->on('packs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prods');
    }
};
