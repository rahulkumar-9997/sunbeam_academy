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
        Schema::create('branches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); 
            $table->string('slug')->nullable(); 
            $table->text('description')->nullable(); 
            $table->string('phone_1')->nullable(); 
            $table->string('email_1')->nullable();
            $table->string('phone_2')->nullable(); 
            $table->string('email_2')->nullable(); 
            $table->text('address')->nullable();
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
        Schema::dropIfExists('branches');
    }
};
