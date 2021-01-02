<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class InsertData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('transfer')->delete();
      DB::table('akun')->delete();

      DB::table('akun')->insert([
          [
              'no_wa' => '083168252031',
              'email' => 'kykylizaro98@gmail.com',
              'nama' => 'M Iqbal Revantama',
              'pass' => 'qwerty123',
              'tipe' => 'mbr',

          ],

          [
              'no_wa' => '083168252032',
              'email' => 'revantamakyky@gmail.com',
              'nama' => 'Kyky Revantama',
              'pass' => 'qwerty123',
              'tipe' => 'adm',
          ]
      ]);

      DB::table('transfer')->insert([
          [
              'id_trans' => '1',
              'no_wa' => '083168252031',
              'tanggal_trans' => '2021-01-02',
              'bukti_trans' => '09:30:05_2021-01-02.jpg',
              'nominal_trans' => '120000',
              'status_cek' => '0',
          ],
      ]);
    }
}
