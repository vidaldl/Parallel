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

                'type' => 'video',
                'slide' => 1,
                'column' => 1,
                'object' => 'https://www.youtube.com/watch?v=rYwND0CcID4',
                'title' => 'Grupo Hidalgo & Asociados S.R.L.1',
                'created_at' => '2019-08-28 14:43:44',
                'updated_at' => '2019-08-28 14:43:44',
            ),
            1 =>
            array (

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

                'type' => 'image',
                'slide' => 3,
                'column' => 2,
                'object' => 'gallery/v6JCXzQ2WEltzTdktHoSvfogqw2u15y20khfUnhs.png',
                'title' => 'ttt',
                'created_at' => '2019-08-28 20:37:07',
                'updated_at' => '2019-08-28 20:37:07',
            ),
            13 =>
            array (

                'type' => 'image',
                'slide' => 3,
                'column' => 2,
                'object' => 'gallery/ER0f74UGtVcIcRoENr7yDKa8U60LCparNPiRfSVd.png',
                'title' => ';;;;;;',
                'created_at' => '2019-08-28 20:37:59',
                'updated_at' => '2019-08-28 20:37:59',
            ),
            14 =>
            array (

                'type' => 'image',
                'slide' => 3,
                'column' => 2,
                'object' => 'gallery/MwQWhX1mcvHe7Nk4Ou5d8oN5wi7wSORAMF6ydwXe.png',
                'title' => 'ppppokkkj',
                'created_at' => '2019-08-28 20:39:02',
                'updated_at' => '2019-08-28 20:39:02',
            ),
            15 =>
            array (

                'type' => 'image',
                'slide' => 4,
                'column' => 1,
                'object' => 'gallery/IYCGTzLSc7kxArYncPm2YbbXJ4CNv60SXMuq2nmj.png',
                'title' => 'gggg',
                'created_at' => '2019-08-28 20:39:49',
                'updated_at' => '2019-08-28 20:39:49',
            ),
            16 =>
            array (

                'type' => 'video',
                'slide' => 4,
                'column' => 1,
                'object' => 'https://www.youtube.com/watch?v=6PbbB2NKu5s',
                'title' => 'Memesss',
                'created_at' => '2019-08-29 02:00:33',
                'updated_at' => '2019-08-29 02:00:33',
            ),
            17 =>
            array (

                'type' => 'image',
                'slide' => 4,
                'column' => 2,
                'object' => 'gallery/cPqACTcpRr6PB4HVcWMp2UEcZfIN3wmvlQFrs6qM.png',
                'title' => 'dsda',
                'created_at' => '2019-08-30 01:20:33',
                'updated_at' => '2019-08-30 01:20:33',
            ),
            18 =>
            array (

                'type' => 'image',
                'slide' => 4,
                'column' => 2,
                'object' => 'gallery/ZqeGkL2D3f9UzOl51sAtNDbqWlqHfiVzu76vvpPM.png',
                'title' => 'SMALL TEAM',
                'created_at' => '2019-08-30 01:21:10',
                'updated_at' => '2019-08-30 01:21:10',
            ),
            19 =>
            array (

                'type' => 'text',
                'slide' => 4,
                'column' => 2,
                'object' => 'Hola Amigos',
                'title' => 'El Alfa',
                'created_at' => '2019-08-30 18:00:52',
                'updated_at' => '2019-08-30 18:00:52',
            ),
            20 =>
            array (

                'type' => 'text',
                'slide' => 5,
                'column' => 1,
                'object' => 'keloke con klk',
                'title' => 'El Mayol Clasico',
                'created_at' => '2019-08-30 18:12:02',
                'updated_at' => '2019-08-30 18:12:02',
            ),
            21 =>
            array (

                'type' => 'text',
                'slide' => 5,
                'column' => 1,
                'object' => 'ONTOBUL',
                'title' => 'MONKEYBLA',
                'created_at' => '2019-08-30 18:12:46',
                'updated_at' => '2019-08-30 18:12:46',
            ),
            22 =>
            array (

                'type' => 'text',
                'slide' => 5,
                'column' => 2,
                'object' => 'klkconklk',
                'title' => 'siiiii',
                'created_at' => '2019-08-30 18:13:14',
                'updated_at' => '2019-08-30 18:13:14',
            ),
            23 =>
            array (

                'type' => 'text',
                'slide' => 5,
                'column' => 2,
                'object' => 'Dame la lu papa',
                'title' => 'keloke manin',
                'created_at' => '2019-08-30 18:13:44',
                'updated_at' => '2019-08-30 18:13:44',
            ),
        ));


    }
}
