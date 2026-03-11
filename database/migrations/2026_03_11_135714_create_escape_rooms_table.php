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
        Schema::create('escape_rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->bigInteger('city_id');
            $table->bigInteger('region_id');
            $table->string('name');
            $table->string('slug');
            $table->text('body');
            $table->integer('capacity_children');
            $table->integer('capacity_adults');
            $table->integer('area');
            $table->integer('age_from');
            $table->integer('age_to');
            $table->text('worktime');
            $table->boolean('catering');
            $table->string('images')->nullable();
            $table->string('address');
            $table->string('coordinates');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('escape_rooms');
    }
};
