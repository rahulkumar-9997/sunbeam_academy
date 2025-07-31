<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('album_branches', function (Blueprint $table) {
            $table->dropForeign(['branche_id']);
            $table->renameColumn('branche_id', 'branch_id');
        });
        Schema::table('album_branches', function (Blueprint $table) {
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('album_branches', function (Blueprint $table) {
            $table->dropForeign(['branch_id']);
            $table->renameColumn('branch_id', 'branche_id');
        });

        Schema::table('album_branches', function (Blueprint $table) {
            $table->foreign('branche_id')->references('id')->on('branches')->onDelete('cascade');
        });
    }
};
