<?php

use Illuminate\Database\Seeder;

class LatestGalleryImagesGalleryItemTableSeeder extends Seeder
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
                'id' => '22',
                'gallery_item_id' => '1',
                'gallery_images_id' => '33',
            ),
            1 => 
            array (
                'id' => '23',
                'gallery_item_id' => '2',
                'gallery_images_id' => '34',
            ),
            2 => 
            array (
                'id' => '24',
                'gallery_item_id' => '3',
                'gallery_images_id' => '35',
            ),
            3 => 
            array (
                'id' => '26',
                'gallery_item_id' => '5',
                'gallery_images_id' => '37',
            ),
            4 => 
            array (
                'id' => '25',
                'gallery_item_id' => '3',
                'gallery_images_id' => '36',
            ),
        ));
        
        
    }
}