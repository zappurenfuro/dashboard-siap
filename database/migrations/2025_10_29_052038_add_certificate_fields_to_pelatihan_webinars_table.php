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
        Schema::table('pelatihan_webinars', function (Blueprint $table) {
            $table->string('sertifikat_filename')->nullable();
            $table->string('sertifikat_size')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pelatihan_webinars', function (Blueprint $table) {
            $table->dropColumn(['sertifikat_filename', 'sertifikat_size']);
        });
    }
};
