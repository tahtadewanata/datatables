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
        Schema::create('kejarpaket', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedtinyInteger('kecamatan_id');
            $table->integer('paketA_lk')->nullable();
            $table->integer('paketA_pr')->nullable();
            $table->integer('paketB_lk')->nullable();
            $table->integer('paketB_pr')->nullable();
            $table->integer('paketC_lk')->nullable();
            $table->integer('paketC_pr')->nullable();
            $table->integer('tahun')->nullable();
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
        Schema::dropIfExists('kejarpaket');
    }
};
