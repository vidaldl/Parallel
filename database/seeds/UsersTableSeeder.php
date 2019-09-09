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
                'id' => 1,
                'username' => 'Madre Tierra',
                'email' => 'vidaldl63@gmail.com',
                'role' => 'admin',
                'email_verified_at' => NULL,
                'password' => '$2y$10$SWn55X5.tZkyiqQD/tnJROwrBXRnhS3cQ4P/dLdCiMW79kvZ5nuxy',
                'remember_token' => 'R7jk30vK4sggjG6GhShxNyoScJsrQAfYFZrC1P5bh00AdGKL8hXHBlPBABd5',
                'created_at' => '2019-06-23 00:17:24',
                'updated_at' => '2019-09-09 05:10:06',
            ),
        ));
        
        
    }
}