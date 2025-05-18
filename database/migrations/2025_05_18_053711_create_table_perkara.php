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
        Schema::create('table_perkara', function (Blueprint $table) {
            $table->id();
            $table->string('no_perkara', 15);
            $table->string('jenis_perkara', 100);
            $table->string('terdakwa', 100);
            $table->string('korban', 100);
            $table->enum('status_perkara', ['aktif', 'ditutup', 'banding', 'kasasi'])->default('aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_perkara');
    }
};
