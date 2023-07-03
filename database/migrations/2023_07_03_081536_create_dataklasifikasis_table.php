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
        Schema::create('dataklasifikasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namadata');
            $table->enum('klasifikasi', ['DASAR', 'TERPILAH', 'ANAK'])->default('TERPILAH');
            $table->enum('bidang', ['KESEHATAN', 'PENDIDIKAN', 'SDM', 'SOSHUM', 'EKONOMI', 'KEKERASAN_PR', 'POLITIK', 'TUMBUHKEMBANG', 'PERLINDUNGAN'])->default('KESEHATAN');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dataklasifikasi');
    }
};
