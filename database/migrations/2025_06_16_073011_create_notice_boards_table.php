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
        Schema::create('notice_boards', function (Blueprint $table) {
            $table->string('title');
            $table->string('notice_type')->nullable(); 
            $table->text('description')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('file')->nullable();
            $table->string('page_link')->nullable();
            $table->boolean('status')->default(1);
            $table->unsignedInteger('user_id')->nullable(); 
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notice_boards');
    }
};
