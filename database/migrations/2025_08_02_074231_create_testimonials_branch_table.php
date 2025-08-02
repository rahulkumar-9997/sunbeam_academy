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
        Schema::create('testimonials_branch', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('testimonials_id');
            $table->unsignedInteger('branch_id');
            $table->timestamps();
            $table->foreign('testimonials_id')->references('id')->on('testimonials')->onDelete('cascade');
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials_branch');
    }
};
