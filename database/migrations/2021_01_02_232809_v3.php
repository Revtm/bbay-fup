<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class V3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::dropIfExists('transfer');
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

      Schema::create('transfer', function (Blueprint $table) {
          $table->increments('id_trans');
          $table->string('no_wa', 14);
          $table->date('tanggal_trans');
          $table->string('bukti_trans', 35);
          $table->integer('nominal_trans')->unsigned();
          $table->string('status_cek',1);
      });

      Schema::table('transfer', function (Blueprint $table) {
        $table->foreign('no_wa')->references('no_wa')->on('akun');
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
