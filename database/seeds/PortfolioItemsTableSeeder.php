<?php

use Illuminate\Database\Seeder;

class PortfolioItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('portfolio_items')->delete();
        
        \DB::table('portfolio_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Productos',
                'subtitle' => 'Una colección que muestra lo que ofrecemos',
                'logo' => 'content/portfolio/7XoL8OYmDZxYsQvqeUNAcfXKVeN6iyfzq9gdUyJ1.png',
                'screenshot' => 'content/portfolio/gVvuv1erOQ4cfUJlVV7XQNExd7k18uNaPlP8fsCt.png',
                'contenido' => '<p>El Bulto no Vive sin ti</p>',
                'author' => 'LEO VIDAL',
                'author_bio' => 'EL VERDADERO',
                'link_title' => 'ENTRA',
                'button_text' => 'QUE ENTRES',
                'button_icon' => 'fas fa-dollar-sign',
                'link' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Portfolio',
                'subtitle' => 'Hello',
                'logo' => 'content/portfolio/LXgFMYBw18kNZCMzJswEk1RiZ6zyAxiNgLsZG7Z1.png',
                'screenshot' => NULL,
                'contenido' => NULL,
                'author' => NULL,
                'author_bio' => NULL,
                'link_title' => NULL,
                'button_text' => NULL,
                'button_icon' => NULL,
                'link' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Portfolio',
                'subtitle' => NULL,
                'logo' => NULL,
                'screenshot' => NULL,
                'contenido' => NULL,
                'author' => NULL,
                'author_bio' => NULL,
                'link_title' => NULL,
                'button_text' => NULL,
                'button_icon' => NULL,
                'link' => NULL,
                'deleted_at' => '2020-01-23 20:34:52',
                'created_at' => NULL,
                'updated_at' => '2020-01-23 20:34:52',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Desarrollo',
                'subtitle' => 'Diseño, Planeación y Desarollo de Sistemas',
                'logo' => 'content/portfolio/GHFzFWseYNDJR314dAi4J4OMX8Q6sNTAzNWExbOA.png',
                'screenshot' => NULL,
                'contenido' => NULL,
                'author' => NULL,
                'author_bio' => NULL,
                'link_title' => NULL,
                'button_text' => NULL,
                'button_icon' => NULL,
                'link' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}