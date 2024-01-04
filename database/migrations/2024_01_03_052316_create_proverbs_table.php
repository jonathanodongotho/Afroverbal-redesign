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
        Schema::create('proverbs', function (Blueprint $table) {
            $table->id();
            $table->string('image_path');
            $table->string('slug');
            $table->string('proverb_text');
            $table->string('proverb_translation');
            $table->longText('teaching');
            $table->integer('context_id');
            $table->integer('tribe_id');
            $table->string('author')->default('Jonathan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proverbs');
    }
};
