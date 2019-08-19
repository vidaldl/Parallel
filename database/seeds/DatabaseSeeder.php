<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      
        $this->call(OrdersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ContenidoAboutsTableSeeder::class);
        $this->call(ContenidoSectionFootersTableSeeder::class);
        $this->call(ContenidoSection1sTableSeeder::class);
        $this->call(ContenidoSection2sTableSeeder::class);
        $this->call(ContenidoSection3sTableSeeder::class);
        $this->call(ContenidoSection4sTableSeeder::class);
        $this->call(ContenidoSection5sTableSeeder::class);
        $this->call(InfoSliderImage2sTableSeeder::class);
        $this->call(InfoSliderImage3sTableSeeder::class);
        $this->call(InfoSliderImagesTableSeeder::class);
        $this->call(InfoSliderText2sTableSeeder::class);
        $this->call(InfoSliderText3sTableSeeder::class);
        $this->call(InfoSliderTextsTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PostTagTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(PricingsTableSeeder::class);
        $this->call(ServiciosTableSeeder::class);
        $this->call(StylesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(LinksTableSeeder::class);
        $this->call(LinkSectionsTableSeeder::class);
    }
}
