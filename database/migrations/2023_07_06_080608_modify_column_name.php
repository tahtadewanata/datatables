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
            DB::statement("ALTER TABLE dataklasifikasi CHANGE klasifikasi id_klasifikasi BIGINT UNSIGNED;");
            DB::statement("ALTER TABLE dataklasifikasi CHANGE bidang id_bidang BIGINT UNSIGNED;");
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
        });
    }
};
