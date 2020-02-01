<?php

use Illuminate\Database\Seeder;

class DB_1580525977DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(DB_1580525977CitiesTableSeeder::class);
        $this->call(DB_1580525977ContenidoAboutsTableSeeder::class);
        $this->call(DB_1580525977ContenidoSection1sTableSeeder::class);
        $this->call(DB_1580525977ContenidoSection2sTableSeeder::class);
        $this->call(DB_1580525977ContenidoSection3sTableSeeder::class);
        $this->call(DB_1580525977ContenidoSection4sTableSeeder::class);
        $this->call(DB_1580525977ContenidoSection5sTableSeeder::class);
        $this->call(DB_1580525977ContenidoSectionFootersTableSeeder::class);
        $this->call(DB_1580525977FeaturesTableSeeder::class);
        $this->call(DB_1580525977FrasesTableSeeder::class);
        $this->call(DB_1580525977GalleryImagesTableSeeder::class);
        $this->call(DB_1580525977GalleryImagesGalleryItemTableSeeder::class);
        $this->call(DB_1580525977GalleryItemsTableSeeder::class);
        $this->call(DB_1580525977GallerySectionsTableSeeder::class);
        $this->call(DB_1580525977InfoSliderImage2sTableSeeder::class);
        $this->call(DB_1580525977InfoSliderImage3sTableSeeder::class);
        $this->call(DB_1580525977InfoSliderImagesTableSeeder::class);
        $this->call(DB_1580525977InfoSliderText2sTableSeeder::class);
        $this->call(DB_1580525977InfoSliderText3sTableSeeder::class);
        $this->call(DB_1580525977InfoSliderTextsTableSeeder::class);
        $this->call(DB_1580525977LinkSectionsTableSeeder::class);
        $this->call(DB_1580525977LinksTableSeeder::class);
        $this->call(DB_1580525977MenuItemsTableSeeder::class);
        $this->call(DB_1580525977OrdersTableSeeder::class);
        $this->call(DB_1580525977PortfolioCategoriesTableSeeder::class);
        $this->call(DB_1580525977PortfolioCategoryPortfolioItemTableSeeder::class);
        $this->call(DB_1580525977PortfolioItemsTableSeeder::class);
        $this->call(DB_1580525977PostTagTableSeeder::class);
        $this->call(DB_1580525977PostsTableSeeder::class);
        $this->call(DB_1580525977PricingItemsTableSeeder::class);
        $this->call(DB_1580525977PricingPricingItemTableSeeder::class);
        $this->call(DB_1580525977PricingSectionsTableSeeder::class);
        $this->call(DB_1580525977PricingsTableSeeder::class);
        $this->call(DB_1580525977PropertiesTableSeeder::class);
        $this->call(DB_1580525977SectionPropertiesTableSeeder::class);
        $this->call(DB_1580525977ServiciosTableSeeder::class);
        $this->call(DB_1580525977StylesTableSeeder::class);
        $this->call(DB_1580525977TagsTableSeeder::class);
        $this->call(DB_1580525977UsersTableSeeder::class);
    }
}
