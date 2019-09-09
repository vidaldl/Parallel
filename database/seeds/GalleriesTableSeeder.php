<?php

use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('galleries')->delete();
        
        \DB::table('galleries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 'video',
                'slide' => 1,
                'column' => 1,
                'object' => 'https://youtu.be/-gl3EnoSyY8',
                'title' => 'Grupo Hidalgo & Asociados S.R.L.1',
                'created_at' => '2019-08-28 14:43:44',
                'updated_at' => '2019-08-28 14:43:44',
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 'image',
                'slide' => 1,
                'column' => 1,
                'object' => 'gallery/I4C3PhQXRwbeXX1yP8On80iP3kWu94L7PPTMnEvg.png',
                'title' => 'Grupo Hidalgo & Asociados, S.R.L. Grupo Hidalgo & Asociados, S.R.L. Grupo Hidalgo & Asociados, S.R.L. Grupo Hidalgo & Asociados, S.R.L. Grupo Hidalgo & Asociados, S.R.L. Grupo Hidalgo & Asociados, S.R.L.',
                'created_at' => '2019-08-28 14:43:18',
                'updated_at' => '2019-08-28 14:43:18',
            ),
            2 => 
            array (
                'id' => 3,
                'type' => 'image',
                'slide' => 1,
                'column' => 2,
                'object' => 'gallery/I4C3PhQXRwbeXX1yP8On80iP3kWu94L7PPTMnEvg.png',
                'title' => 'Grupo Hidalgo & Asociados, S.R.L. Grupo Hidalgo & Asociados, S.R.L. Grupo Hidalgo & Asociados, S.R.L. Grupo Hidalgo & Asociados, S.R.L. Grupo Hidalgo & Asociados, S.R.L. Grupo Hidalgo & Asociados, S.R.L.',
                'created_at' => '2019-08-28 14:43:18',
                'updated_at' => '2019-08-28 14:43:18',
            ),
            3 => 
            array (
                'id' => 4,
                'type' => 'video',
                'slide' => 1,
                'column' => 2,
                'object' => 'https://www.youtube.com/watch?v=rYwND0CcID4',
                'title' => 'Grupo Hidalgo & Asociados S.R.L.1',
                'created_at' => '2019-08-28 14:43:44',
                'updated_at' => '2019-08-28 14:43:44',
            ),
            4 => 
            array (
                'id' => 5,
                'type' => 'image',
                'slide' => 1,
                'column' => 2,
                'object' => 'gallery/wFea4HmGg4fFpId6HoF99fVWWHCLWlMGOncwmEsZ.png',
                'title' => 'Grupo Hidalgo & Asociados S.R.L.1',
                'created_at' => '2019-08-28 14:43:44',
                'updated_at' => '2019-08-28 14:43:44',
            ),
            5 => 
            array (
                'id' => 6,
                'type' => 'image',
                'slide' => 2,
                'column' => 1,
                'object' => 'gallery/zZAy9iLWGaGspwpdZCmX5L2Zric53jc8eGXMhEqy.png',
                'title' => 'Foreal',
                'created_at' => '2019-08-28 20:13:21',
                'updated_at' => '2019-08-28 20:13:21',
            ),
            6 => 
            array (
                'id' => 7,
                'type' => 'image',
                'slide' => 2,
                'column' => 1,
                'object' => 'gallery/JKQeQeMrboyfkOxQIYXVhg9PUkeqvQ63xxip72uo.png',
                'title' => 'kkk',
                'created_at' => '2019-08-28 20:18:27',
                'updated_at' => '2019-08-28 20:18:27',
            ),
            7 => 
            array (
                'id' => 8,
                'type' => 'image',
                'slide' => 2,
                'column' => 2,
                'object' => 'gallery/RUhXB79DwrMbY49RCvcl8mASYMm8taiOobswoNsV.png',
                'title' => 'ppp',
                'created_at' => '2019-08-28 20:18:53',
                'updated_at' => '2019-08-28 20:18:53',
            ),
            8 => 
            array (
                'id' => 9,
                'type' => 'image',
                'slide' => 2,
                'column' => 2,
                'object' => 'gallery/uggzibdS6GuAAyrCykhJwySzsMB01bLOrS5GM7I3.png',
                'title' => 'lklklkl',
                'created_at' => '2019-08-28 20:21:54',
                'updated_at' => '2019-08-28 20:21:54',
            ),
            9 => 
            array (
                'id' => 10,
                'type' => 'image',
                'slide' => 2,
                'column' => 2,
                'object' => 'gallery/5xiRBJpjKy2qxLYKdbIg78MTgAqqvZsnTaQgd6sk.png',
                'title' => 'vcvxcv',
                'created_at' => '2019-08-28 20:34:34',
                'updated_at' => '2019-08-28 20:34:34',
            ),
            10 => 
            array (
                'id' => 11,
                'type' => 'image',
                'slide' => 3,
                'column' => 1,
                'object' => 'gallery/MOnYeKHZLTWteyzXErV5P6DJotgpmkjzSQ5GRdha.png',
                'title' => 'kkskdjfhsdjfhsd',
                'created_at' => '2019-08-28 20:34:55',
                'updated_at' => '2019-08-28 20:34:55',
            ),
            11 => 
            array (
                'id' => 12,
                'type' => 'image',
                'slide' => 3,
                'column' => 1,
                'object' => 'gallery/rYm6hQvKlSIo73H5sKu6KQ9VO8h6SCPaulmlo5S6.png',
                'title' => 'vvvv',
                'created_at' => '2019-08-28 20:36:33',
                'updated_at' => '2019-08-28 20:36:33',
            ),
            12 => 
            array (
                'id' => 13,
                'type' => 'image',
                'slide' => 3,
                'column' => 2,
                'object' => 'gallery/v6JCXzQ2WEltzTdktHoSvfogqw2u15y20khfUnhs.png',
                'title' => 'ttt',
                'created_at' => '2019-08-28 20:37:07',
                'updated_at' => '2019-08-28 20:37:07',
            ),
        ));
        
        
    }
}