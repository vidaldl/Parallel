<?php

use Illuminate\Database\Seeder;

class LastGalleryImagesGalleryItemTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gallery_images_gallery_item')->delete();
        
        \DB::table('gallery_images_gallery_item')->insert(array (
            0 => 
            array (
                'id' => '27',
                'gallery_item_id' => '2',
                'gallery_images_id' => '38',
            ),
            1 => 
            array (
                'id' => '26',
                'gallery_item_id' => '2',
                'gallery_images_id' => '37',
            ),
            2 => 
            array (
                'id' => '25',
                'gallery_item_id' => '1',
                'gallery_images_id' => '36',
            ),
            3 => 
            array (
                'id' => '17',
                'gallery_item_id' => '5',
                'gallery_images_id' => '28',
            ),
            4 => 
            array (
                'id' => '18',
                'gallery_item_id' => '5',
                'gallery_images_id' => '29',
            ),
            5 => 
            array (
                'id' => '19',
                'gallery_item_id' => '5',
                'gallery_images_id' => '30',
            ),
            6 => 
            array (
                'id' => '20',
                'gallery_item_id' => '5',
                'gallery_images_id' => '31',
            ),
            7 => 
            array (
                'id' => '28',
                'gallery_item_id' => '2',
                'gallery_images_id' => '39',
            ),
            8 => 
            array (
                'id' => '29',
                'gallery_item_id' => '2',
                'gallery_images_id' => '40',
            ),
            9 => 
            array (
                'id' => '30',
                'gallery_item_id' => '2',
                'gallery_images_id' => '41',
            ),
        ));
        
        
    }
}