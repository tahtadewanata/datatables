<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dataklasifikasi', function (Blueprint $table) {
            //
            DB::statement("ALTER TABLE `dataklasifikasi` CHANGE `klasifikasi` `klasifikasi` ENUM('DASAR', 'TERPILAH', 'ANAK', 'KELEMBAGAAN') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'DASAR';");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dataklasifikasi', function (Blueprint $table) {
            //
            DB::statement("ALTER TABLE `dataklasifikasi` CHANGE `klasifikasi` `klasifikasi` ENUM('DASAR', 'TERPILAH', 'ANAK', 'KELEMBAGAAN') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'DASAR';");
        });
    }
};
