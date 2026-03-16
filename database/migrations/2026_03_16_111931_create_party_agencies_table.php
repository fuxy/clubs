<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('party_agencies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->bigInteger('city_id');
            $table->bigInteger('region_id');
            $table->string('name');
            $table->string('slug');
            $table->text('body');
            $table->text('worktime');
            $table->string('images')->nullable();
            $table->string('address');
            $table->string('coordinates');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('party_agencies');
    }
};
