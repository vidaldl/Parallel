<?php

use Illuminate\Database\Seeder;

class LastGalleryImagesTableSeeder extends Seeder
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
                'id' => '38',
                'image' => 'content/portfolioGallery/29dgbvPb1Z1Fogk10Dhg75ICyXVEX8IdDFeXi9Sz.png',
            ),
            1 => 
            array (
                'id' => '37',
                'image' => 'content/portfolioGallery/qbUXK5GMs1EhwUwFoeFyUrUlpWZ32zb2PDlDH7Lx.png',
            ),
            2 => 
            array (
                'id' => '36',
                'image' => 'content/portfolioGallery/KGneBQNLlwQHCh66lNV2V3PvDXb3dHMCtBZyYUoG.png',
            ),
            3 => 
            array (
                'id' => '28',
                'image' => 'content/portfolioGallery/Ew2Jrqwc2Leak7I0zwO3x58Yr7QUzEKm0GYRFeRm.png',
            ),
            4 => 
            array (
                'id' => '29',
                'image' => 'content/portfolioGallery/n97klE4QWMHL5YkMdH7LDwchfZ5O2kOMdKAaiyLq.png',
            ),
            5 => 
            array (
                'id' => '30',
                'image' => 'content/portfolioGallery/oqOqGgZ8vWZDO1W0YuWK0F8R6FGklRgcs9kG5Ptc.png',
            ),
            6 => 
            array (
                'id' => '31',
                'image' => 'content/portfolioGallery/qbdzZ7WEbVWCXwRqLwPSCWpx7RKvpoLY0dHPckDT.png',
            ),
            7 => 
            array (
                'id' => '39',
                'image' => 'content/portfolioGallery/nesDoRW7XdrQFNHlBkvJpeXmkSEiqQ39dpSy6wsR.png',
            ),
            8 => 
            array (
                'id' => '40',
                'image' => 'content/portfolioGallery/DUlin5ZsUlvewJQBdmCZ5ozh4thu94oTDstD9bYC.png',
            ),
            9 => 
            array (
                'id' => '41',
                'image' => 'content/portfolioGallery/doStfq3LLiYlZlc47ce7rv4LtGYZ0DEmFCm2CHTT.png',
            ),
        ));
        
        
    }
}