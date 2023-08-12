<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_users')->delete();
        
        \DB::table('admin_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_perusahaan' => NULL,
                'username' => 'admin',
                'password' => '$2y$10$88/KVpyG1PbPaVnNKQ8cWeDQkUzVBd..KglIMEyj5eqqaCLvRIdGC',
                'name' => 'Administrator',
                'avatar' => NULL,
                'remember_token' => 'TH52svPYKKWX8AQsupEMXIThBjw2Uy6Efbev73DYzGqVlTkf2uhgCZnRi55G',
                'created_at' => '2023-08-06 14:23:32',
                'updated_at' => '2023-08-06 14:23:32',
            ),
            1 => 
            array (
                'id' => 2,
                'id_perusahaan' => 1,
                'username' => 'andre',
                'password' => '$2y$10$iakECkYXoaa.rcxZxQHEgOcjnw1Qa2Ftj8T0xr79l51yX.Nym5fG6',
                'name' => 'Andre Ramadhan',
                'avatar' => NULL,
                'remember_token' => 'XLmeqahwcRQNzgH0ule2z2Tu0prnCmTRd1S1GxNuWowPAXC9U4NTpJ7pPxT9',
                'created_at' => '2023-08-07 10:03:59',
                'updated_at' => '2023-08-12 10:28:16',
            ),
            2 => 
            array (
                'id' => 3,
                'id_perusahaan' => 2,
                'username' => 'yusuf',
                'password' => '$2y$10$DlqqE66fzhiJP8xBxtXHFuRXmLQeYr3wjm3LU3X5w0YzKYI71K7IG',
                'name' => 'Yusuf',
                'avatar' => NULL,
                'remember_token' => 'd8hhfVxU5KO17MMyRnayBLSOkgsiDMBbL7FiJDNQxPHGm39gnUmP8ztQRQ6S',
                'created_at' => '2023-08-07 14:17:32',
                'updated_at' => '2023-08-12 10:39:52',
            ),
            3 => 
            array (
                'id' => 4,
                'id_perusahaan' => 1,
                'username' => 'haryadi',
                'password' => '$2y$10$3dH5OKYFDQfz/rn6YQXtC.P28Why38zjaHBlOLtYazcFIl.Lfm/AO',
                'name' => 'Haryadi',
                'avatar' => NULL,
                'remember_token' => 'j5wiejADzMgeB9JPCy1Ll7F6H6wAmJZIq19o8j2qPXPy5EU97ydEjOOn4737',
                'created_at' => '2023-08-12 09:36:57',
                'updated_at' => '2023-08-12 10:40:39',
            ),
            4 => 
            array (
                'id' => 5,
                'id_perusahaan' => 2,
                'username' => 'deni',
                'password' => '$2y$10$COWSdVlVPO.15fLG0RqWMOD1igEKMiCh1dMi5W7enQQ.L0ePelX22',
                'name' => 'Deni',
                'avatar' => NULL,
                'remember_token' => 'NBNMq4YnoKN5aYbksrEHOfIyNOAVq7GRXAhYrZHhtyR3iTmhxijIBTk6i6RO',
                'created_at' => '2023-08-12 11:01:17',
                'updated_at' => '2023-08-12 11:01:17',
            ),
        ));
        
        
    }
}