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
        Schema::create('achievers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('branch_id');
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('profile_pic')->nullable();
            $table->text('short_content')->nullable();
            $table->text('long_content')->nullable();
            $table->string('class')->nullable();
            $table->integer('year')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievers');
    }
};
