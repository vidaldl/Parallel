<?php

use Illuminate\Database\Seeder;

class UltimoGalleryItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gallery_items')->delete();
        
        \DB::table('gallery_items')->insert(array (
            0 => 
            array (
                'id' => '1',
                'title' => 'Chapels renovation',
                'subtitle' => 'Chapels renovations done in New York',
                'desc_title' => 'Chapels Renovation',
                'video' => NULL,
                'desc' => NULL,
                'left_btn' => 'Expander',
                'right_btn' => 'Más',
                'display_tooltip' => '1',
                'display_type' => '0',
                'display_simple' => '1',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2020-05-13 20:48:57',
            ),
            1 => 
            array (
                'id' => '2',
                'title' => 'Bathroom Remodeling',
                'subtitle' => 'Find Out More',
                'desc_title' => NULL,
                'video' => NULL,
                'desc' => NULL,
                'left_btn' => 'Expander',
                'right_btn' => 'Más',
                'display_tooltip' => '1',
                'display_type' => '0',
                'display_simple' => '1',
                'deleted_at' => '2020-05-13 20:48:52',
                'created_at' => NULL,
                'updated_at' => '2020-05-13 20:48:52',
            ),
            2 => 
            array (
                'id' => '3',
                'title' => 'Indoor Project',
                'subtitle' => 'Our Indoor Past Projects',
                'desc_title' => NULL,
                'video' => NULL,
                'desc' => NULL,
                'left_btn' => 'Expander',
                'right_btn' => 'Más',
                'display_tooltip' => '1',
                'display_type' => '0',
                'display_simple' => '1',
                'deleted_at' => '2020-01-29 01:45:25',
                'created_at' => NULL,
                'updated_at' => '2020-01-29 01:45:25',
            ),
            3 => 
            array (
                'id' => '4',
                'title' => 'Kitchen',
                'subtitle' => 'Planning',
                'desc_title' => NULL,
                'video' => NULL,
                'desc' => NULL,
                'left_btn' => 'Expander',
                'right_btn' => 'Más',
                'display_tooltip' => '1',
                'display_type' => '0',
                'display_simple' => '1',
                'deleted_at' => '2020-01-29 01:45:32',
                'created_at' => NULL,
                'updated_at' => '2020-01-29 01:45:32',
            ),
            4 => 
            array (
                'id' => '5',
                'title' => 'Beverly Hills Manor',
                'subtitle' => 'Indoor Project',
                'desc_title' => NULL,
                'video' => NULL,
                'desc' => NULL,
                'left_btn' => 'Expander',
                'right_btn' => 'Más',
                'display_tooltip' => '1',
                'display_type' => '0',
                'display_simple' => '1',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => '6',
                'title' => 'Outdoor Example',
                'subtitle' => 'Example',
                'desc_title' => NULL,
                'video' => NULL,
                'desc' => NULL,
                'left_btn' => 'Expander',
                'right_btn' => 'Más',
                'display_tooltip' => '1',
                'display_type' => '0',
                'display_simple' => '1',
                'deleted_at' => '2020-01-31 20:21:57',
                'created_at' => NULL,
                'updated_at' => '2020-01-31 20:21:57',
            ),
            6 => 
            array (
                'id' => '7',
                'title' => 'Planning',
                'subtitle' => 'Information',
                'desc_title' => NULL,
                'video' => NULL,
                'desc' => NULL,
                'left_btn' => 'Expander',
                'right_btn' => 'Más',
                'display_tooltip' => '1',
                'display_type' => '0',
                'display_simple' => '1',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => '8',
            'title' => 'Mormon New Chapels (Port of Prince, Haiti)',
                'subtitle' => NULL,
                'desc_title' => NULL,
                'video' => NULL,
                'desc' => NULL,
                'left_btn' => 'Expander',
                'right_btn' => 'Más',
                'display_tooltip' => '1',
                'display_type' => '0',
                'display_simple' => '1',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}