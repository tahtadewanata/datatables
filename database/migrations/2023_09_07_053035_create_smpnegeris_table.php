<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('smpnegeri', function (Blueprint $table) {
            $table->id();
            $table->unsignedtinyInteger('kecamatan_id');
            $table->integer('jk_lk')->nullable();
            $table->integer('jk_pr')->nullable();
            $table->integer('tahun')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('smpnegeri');
    }
};
