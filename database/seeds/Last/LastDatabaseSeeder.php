<?php

use Illuminate\Database\Seeder;

class LastDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(LastCatalogItem2sTableSeeder::class);
        $this->call(LastCatalogItem3sTableSeeder::class);
        $this->call(LastCatalogItemsTableSeeder::class);
        $this->call(LastCatalogSection2sTableSeeder::class);
        $this->call(LastCatalogSection3sTableSeeder::class);
        $this->call(LastCatalogSectionsTableSeeder::class);
        $this->call(LastContenidoAboutsTableSeeder::class);
        $this->call(LastContenidoSection1sTableSeeder::class);
        $this->call(LastContenidoSection2sTableSeeder::class);
        $this->call(LastContenidoSection3sTableSeeder::class);
        $this->call(LastContenidoSection4sTableSeeder::class);
        $this->call(LastContenidoSection5sTableSeeder::class);
        $this->call(LastContenidoSectionFootersTableSeeder::class);
        $this->call(LastFilesTableSeeder::class);
        $this->call(LastFontStylesTableSeeder::class);
        $this->call(LastFontsTableSeeder::class);
        $this->call(LastFooterLinksTableSeeder::class);
        $this->call(LastFrasesTableSeeder::class);
        $this->call(LastGalleryImagesTableSeeder::class);
        $this->call(LastGalleryImagesGalleryItemTableSeeder::class);
        $this->call(LastGalleryItemsTableSeeder::class);
        $this->call(LastGallerySectionsTableSeeder::class);
        $this->call(LastInfoSliderImage2sTableSeeder::class);
        $this->call(LastInfoSliderImage3sTableSeeder::class);
        $this->call(LastInfoSliderImagesTableSeeder::class);
        $this->call(LastInfoSliderText2sTableSeeder::class);
        $this->call(LastInfoSliderText3sTableSeeder::class);
        $this->call(LastInfoSliderTextsTableSeeder::class);
        $this->call(LastLinkSectionsTableSeeder::class);
        $this->call(LastLinksTableSeeder::class);
        $this->call(LastMenuItemsTableSeeder::class);
        $this->call(LastModalsTableSeeder::class);
        $this->call(LastOrdersTableSeeder::class);
        $this->call(LastPortfolioCategoriesTableSeeder::class);
        $this->call(LastPortfolioItemsTableSeeder::class);
        $this->call(LastPostTagTableSeeder::class);
        $this->call(LastPostsTableSeeder::class);
        $this->call(LastPricingItemsTableSeeder::class);
        $this->call(LastPricingPricingItemTableSeeder::class);
        $this->call(LastPricingSectionsTableSeeder::class);
        $this->call(LastPricingsTableSeeder::class);
        $this->call(LastServiciosTableSeeder::class);
        $this->call(LastStylesTableSeeder::class);
        $this->call(LastTagsTableSeeder::class);
        $this->call(LastUsersTableSeeder::class);
    }
}
