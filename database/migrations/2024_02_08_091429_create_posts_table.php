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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // length by default 255
            $table->text('content');
            $table->timestamps();
        });
    }         

    /**
     * Reverse the migrations.
     */
    public function down(): void   
    {
        Schema::dropIfExists('posts');
    }
};

// table names be in plural in artisan cmd