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
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->integer('price');
            $table->integer('count');
            $table->enum('status', ['pending', 'success', 'failed'])->default('pending');
            // $table->unsignedBigInteger('user_id');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->date('date')->nullable();
            $table->string('snap_token')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction');
    }
};
