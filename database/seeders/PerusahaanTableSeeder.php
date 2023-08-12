<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PerusahaanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('perusahaan')->delete();
        
        \DB::table('perusahaan')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama_perusahaan' => 'SCCIC ITB',
                'alamat_perusahaan' => 'jl. ganesha taman sari bandung',
                'nama_direktur' => 'Pak Irfan',
                'created_at' => '2023-08-12 10:25:56',
                'updated_at' => '2023-08-12 10:25:56',
            ),
            1 => 
            array (
                'id' => 2,
                'nama_perusahaan' => 'Sekolahan ID',
                'alamat_perusahaan' => 'Jl. HMS Mintaredja',
                'nama_direktur' => 'Hendry',
                'created_at' => '2023-08-12 10:39:40',
                'updated_at' => '2023-08-12 10:39:40',
            ),
        ));
        
        
    }
}