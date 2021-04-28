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
                'username' => 'Siscop',
                'email' => 'vidaldl63@gmail.com',
                'role' => 'admin',
                'email_verified_at' => NULL,
                'password' => '$2y$10$7dL8d.3uWeFFRHTH9xTs6O2829EoYMwz0YvHIgxqU750R03HH9H6W',
                'remember_token' => 'OwtWONlqUHpi1VOPArrE7TQm7IMkGjYUeNhUob0xnWX4UJtJxbZIx0RxNGUU',
                'created_at' => '2019-07-10 10:35:22',
                'updated_at' => '2019-07-27 21:41:54',
            ),
        ));
        
        
    }
}