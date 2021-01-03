<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class V4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::dropIfExists('transfer');
      Schema::dropIfExists('part_bbay');
      Schema::dropIfExists('donatur');
      Schema::dropIfExists('akun');


      Schema::create('akun', function (Blueprint $table) {
          $table->string('no_wa',14);
          $table->string('nama',15);
          $table->string('pass');
          $table->string('gen',1);
          $table->string('jk',2);
          $table->string('tipe',3);
          $table->primary('no_wa');
      });

      Schema::create('part_bbay', function (Blueprint $table) {
          $table->increments('part');
          $table->string('poster', 15);
          $table->date('mulai_part');
          $table->date('selesai_part');
      });

      Schema::create('donatur', function (Blueprint $table) {
          $table->increments('id_donatur');
          $table->string('no_wa',14);
          $table->string('nama_donatur',15);
      });

      Schema::create('transfer', function (Blueprint $table) {
          $table->increments('id_trans');
          $table->string('no_wa', 14);
          $table->integer('part')->unsigned();
          $table->integer('id_donatur')->unsigned();
          $table->date('tanggal_trans');
          $table->string('bukti_trans', 35);
          $table->integer('nominal_trans')->unsigned();
          $table->string('status_cek',1);
      });

      Schema::table('donatur', function (Blueprint $table) {
        $table->foreign('no_wa')->references('no_wa')->on('akun');
      });

      Schema::table('transfer', function (Blueprint $table) {
        $table->foreign('no_wa')->references('no_wa')->on('akun');
        $table->foreign('part')->references('part')->on('part_bbay');
        $table->foreign('id_donatur')->references('id_donatur')->on('donatur');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
