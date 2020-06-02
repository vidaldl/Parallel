<?php

use Illuminate\Database\Seeder;

class LatestGalleryImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gallery_images')->delete();
        
        \DB::table('gallery_images')->insert(array (
            0 => 
            array (
                'id' => '33',
                'image' => 'content/portfolioGallery/OrMuE4XkTy7Fm824DIsmN0ZRnqdze88vYTj1Bi0r.png',
                'thumbnail' => NULL,
            ),
            1 => 
            array (
                'id' => '34',
                'image' => 'content/portfolioGallery/hmT2kSA0uQ4umyIYfrx4mRjZH3Y1fyFmWyYab8hz.png',
                'thumbnail' => NULL,
            ),
            2 => 
            array (
                'id' => '35',
                'image' => 'content/portfolioGallery/K96jVOu3nGe4DxEDsd1Cbi1OqbFKMWTrauySSDfX.png',
                'thumbnail' => NULL,
            ),
            3 => 
            array (
                'id' => '37',
                'image' => 'content/portfolioGallery/4VL7TuIDwHXA7XsKbqtjLZDAnGUZ7OO4S7rI8bZ0.png',
                'thumbnail' => NULL,
            ),
            4 => 
            array (
                'id' => '36',
                'image' => 'content/portfolioGallery/rnBydDZhvUAwxiXBXzIxp9xNymK9DPA6QSTNwR1N.png',
                'thumbnail' => NULL,
            ),
        ));
        
        
    }
}