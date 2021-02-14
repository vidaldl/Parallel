<?php

use Illuminate\Database\Seeder;

class PasswordResetsTableSeeder extends Seeder
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
                'token' => '$2y$10$C0JGKq8yx16mO32sUS95PuFow4XfMjX5zvJv1hKfVnEbzA1N6u03q',
                'created_at' => '2019-07-03 12:59:09',
            ),
        ));
        
        
    }
}