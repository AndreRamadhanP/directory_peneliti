<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DirektoriTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('direktori')->delete();
        
        \DB::table('direktori')->insert(array (
            0 => 
            array (
                'id' => 2,
                'id_user' => 2,
                'nama' => 'Andre',
                'judul_jurnal' => 'Aplikasi BSC',
                'tahun_terbit' => 2023,
                'file' => 'files/Package starter Dev Laravel.txt',
                'anggaran' => '2000000.00',
                'created_at' => '2023-08-07 10:14:13',
                'updated_at' => '2023-08-07 10:14:13',
            ),
            1 => 
            array (
                'id' => 3,
                'id_user' => 2,
                'nama' => 'Andre',
                'judul_jurnal' => 'Aplikasi peringkatan karyawan',
                'tahun_terbit' => 2023,
                'file' => 'files/Target Web Portfolio.txt',
                'anggaran' => '1000000.00',
                'created_at' => '2023-08-07 14:16:00',
                'updated_at' => '2023-08-07 14:16:00',
            ),
            2 => 
            array (
                'id' => 4,
                'id_user' => 3,
                'nama' => 'Yusuf',
                'judul_jurnal' => 'Aplikasi Penilaian Kinerja Karyawan dengan metode BSC',
                'tahun_terbit' => 2023,
                'file' => 'files/36d52bbe8e6d4dbbc43b1db0e9f19134.txt',
                'anggaran' => '1500000.00',
                'created_at' => '2023-08-07 14:21:33',
                'updated_at' => '2023-08-07 14:21:33',
            ),
        ));
        
        
    }
}