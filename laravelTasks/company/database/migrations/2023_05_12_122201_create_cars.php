<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->integer('year');
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->integer('available');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
