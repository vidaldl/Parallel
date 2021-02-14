<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
                'id' => '1',
                'username' => 'Hidalgo',
                'email' => 'vidaldl63@gmail.com',
                'role' => 'admin',
                'email_verified_at' => NULL,
                'password' => '$2y$10$AHQcoekMZ3vuY9ljuV3fX.uteqSTTGzBZMGFOidtSuJFypdDF6RLS',
                'remember_token' => '3EFGSekZbo0USqzcdAgYuKRt79P8PzafnCSUqPGEH10PkGOiVms2Iu2Mwp7T',
                'created_at' => '2019-07-02 02:44:41',
                'updated_at' => '2019-07-02 03:59:47',
            ),
        ));
        
        
    }
}