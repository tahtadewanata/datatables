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
        Schema::create('tb_usiasekolahs', function (Blueprint $table) {
            $table->id();
            $table->integer('id_uker');
            $table->integer('jk_lk_sds');
            $table->integer('jk_pr_sds');
            $table->integer('jk_lk_sdn');
            $table->integer('jk_pr_sdn');
            $table->integer('jk_lk_smpn');
            $table->integer('jk_pr_smpn');
            $table->integer('jk_lk_smps');
            $table->integer('jk_pr_smps');
            $table->year('tahun');
            $table->string('created_by');
            $table->date('created_at');
            $table->string('update_by');
            $table->date('update_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_usiasekolahs');
    }
};
