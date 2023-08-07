<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PenelitiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('peneliti')->delete();
        
        \DB::table('peneliti')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_user' => 2,
                'alamat' => 'Jl. Ciumbeuleuit',
                'jenis_kelamin' => 'Pria',
                'created_at' => '2023-08-07 15:08:19',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'id_user' => 3,
                'alamat' => 'Jl. Citopeng Sari',
                'jenis_kelamin' => 'Pria',
                'created_at' => '2023-08-07 15:13:44',
                'updated_at' => '2023-08-07 15:13:44',
            ),
        ));
        
        
    }
}