<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnggaranTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('anggaran')->delete();
        
        \DB::table('anggaran')->insert(array (
            0 => 
            array (
                'id' => 3,
                'created_by' => 5,
                'total_anggaran' => '15000000.00',
                'sisa_anggaran' => '15000000.00',
                'created_at' => '2023-08-12 11:14:34',
                'updated_at' => '2023-08-12 11:15:38',
            ),
        ));
        
        
    }
}