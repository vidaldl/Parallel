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
        $this->call(OrdersTableSeeder::class);
        $this->call(LinksTableSeeder::class);
        $this->call(LinkSectionsTableSeeder::class);
        $this->call(GalleriesTableSeeder::class);
        $this->call(GallerySectionsTableSeeder::class);
        $this->call(SectionPropertiesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(FeaturesTableSeeder::class);
        $this->call(FeaturePropertyTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(PropertiesTableSeeder::class);
    }
}
