<?php

use Illuminate\Database\Seeder;

class MigrationToVPSUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'admin',
                'email' => 'vidaldl63@gmail.com',
                'role' => 'admin',
                'email_verified_at' => NULL,
                'password' => '$2y$10$spkODgUDltrZCwMQOdcqtuX/xktrOk2yvIjOs7wyAkn6itb2ssF3S',
                'remember_token' => 'lnfyJrMDjFZiD8DQD0jC51o6qCMFALOBCSUB6r1QvocQBPtR94ejrWXKzh33',
                'created_at' => '2019-06-23 00:17:24',
                'updated_at' => '2019-11-16 15:57:44',
            ),
        ));
        
        
    }
}