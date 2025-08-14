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
        Schema::create('notice_board_images', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('notice_board_id');
            $table->string('title')->nullable();
            $table->string('order')->nullable();
            $table->string('file');
            $table->timestamps();
            $table->foreign('notice_board_id')->references('id')->on('notice_boards')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notice_board_images');
    }
};
