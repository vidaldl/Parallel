<?php

use Illuminate\Database\Seeder;

class UltimoPasswordResetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('password_resets')->delete();
        
        \DB::table('password_resets')->insert(array (
            0 => 
            array (
                'email' => 'vidaldl63@gmail.com',
                'token' => '$2y$10$gFNsQDR9Yxp.hc2L/TLsTOz73jIwVx6K0ZzAthaIid/6nPwi04Ny.',
                'created_at' => '2020-01-08 03:52:14',
            ),
        ));
        
        
    }
}