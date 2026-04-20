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
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->string('badge');
            $table->string('title');
            $table->string('description');
            $table->string('image');
            $table->string('button_text_one');
            $table->string('button_text_two');
            $table->string('button_link_one');
            $table->string('button_link_two');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heroes');
    }
};
