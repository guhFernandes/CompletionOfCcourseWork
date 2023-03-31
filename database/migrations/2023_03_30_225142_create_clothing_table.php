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
        Schema::create('clothing', function (Blueprint $table) {
            $table->id();
            $table->string('reference', 10);
            $table->string('name');
            $table->longText('description');
            $table->float('price',8,2);
            $table->string('path', 45);
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->foreignId('collection_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clothing');
    }
};
