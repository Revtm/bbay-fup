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
      DB::table('part_bbay')->delete();
      DB::table('donatur')->delete();
      DB::table('akun')->delete();

      DB::table('akun')->insert([
          [
              'no_wa' => '083168252031',
              'nama' => 'Iqbal',
              'pass' => 'qwerty123',
              'gen' => '3',
              'jk' => 'L',
              'tipe' => 'mbr',

          ],

          [
              'no_wa' => '083168252032',
              'nama' => 'Kyky',
              'pass' => 'qwerty123',
              'gen' => '2',
              'jk' => 'L',
              'tipe' => 'adm',
          ],

          [
              'no_wa' => '083168252033',
              'nama' => 'Ustadz',
              'pass' => 'qwerty123',
              'gen' => '0',
              'jk' => 'L',
              'tipe' => 'adm',
          ]
      ]);

      DB::table('part_bbay')->insert([
        [
            'part' => '22',
            'poster' => 'bbay-23.jpg',
            'mulai_part' => '2020-08-21',
            'selesai_part' => '2020-09-19',
        ]
      ]);

      DB::table('donatur')->insert([
        [
            'id_donatur' => '1',
            'no_wa' => '083168252032',
            'nama_donatur' => 'Pak Budi',
        ]
      ]);

      DB::table('transfer')->insert([
          [
              'id_trans' => '1',
              'no_wa' => '083168252031',
              'part' => '22',
              'id_donatur' => '1',
              'tanggal_trans' => '2021-01-02',
              'bukti_trans' => 'Iqbal_09:30:05_2021-01-02.jpg',
              'nominal_trans' => '120000',
              'status_cek' => '0',
          ],
      ]);
    }
}
