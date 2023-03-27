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
        Schema::create('types_clothes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clothes_id');
            $table->unsignedBigInteger('types_id');
            $table->foreign('clothes_id')->references('id')->on('clothes');
            $table->foreign('types_id')->references('id')->on('types');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('types_clothes');
    }
};
