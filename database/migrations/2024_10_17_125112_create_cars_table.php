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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->integer('make_id');
            $table->string('name');
            $table->text('description');
            $table->string('image');
            $table->string('model');
            $table->decimal('price');
            $table->string('trans');
            $table->string('years');
            $table->string('fueltype');
            $table->string('mileage');
            $table->integer('seats');
            $table->integer('doors');
            $table->string('bodytype');
            $table->string('engine');
            $table->string('exterior');
            $table->string('interior');
            $table->string('statut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
