<?php

use Illuminate\Database\Seeder;

class LocalDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(LocalCatalogItem2sTableSeeder::class);
        $this->call(LocalCatalogItem3sTableSeeder::class);
        $this->call(LocalCatalogItemsTableSeeder::class);
        $this->call(LocalCatalogSection2sTableSeeder::class);
        $this->call(LocalCatalogSection3sTableSeeder::class);
        $this->call(LocalCatalogSectionsTableSeeder::class);
        $this->call(LocalContenidoAboutsTableSeeder::class);
        $this->call(LocalContenidoSection1sTableSeeder::class);
        $this->call(LocalContenidoSection2sTableSeeder::class);
        $this->call(LocalContenidoSection3sTableSeeder::class);
        $this->call(LocalContenidoSection4sTableSeeder::class);
        $this->call(LocalContenidoSection5sTableSeeder::class);
        $this->call(LocalContenidoSectionFootersTableSeeder::class);
        $this->call(LocalFilesTableSeeder::class);
        $this->call(LocalFontStylesTableSeeder::class);
        $this->call(LocalFontsTableSeeder::class);
        $this->call(LocalFooterLinksTableSeeder::class);
        $this->call(LocalFrasesTableSeeder::class);
        $this->call(LocalGalleryImagesTableSeeder::class);
        $this->call(LocalGalleryImagesGalleryItemTableSeeder::class);
        $this->call(LocalGalleryItemsTableSeeder::class);
        $this->call(LocalGallerySectionsTableSeeder::class);
        $this->call(LocalInfoSliderImage2sTableSeeder::class);
        $this->call(LocalInfoSliderImage3sTableSeeder::class);
        $this->call(LocalInfoSliderImagesTableSeeder::class);
        $this->call(LocalInfoSliderText2sTableSeeder::class);
        $this->call(LocalInfoSliderText3sTableSeeder::class);
        $this->call(LocalInfoSliderTextsTableSeeder::class);
        $this->call(LocalLinkSectionsTableSeeder::class);
        $this->call(LocalLinksTableSeeder::class);
        $this->call(LocalMenuItemsTableSeeder::class);
        $this->call(LocalModalsTableSeeder::class);
        $this->call(LocalOrdersTableSeeder::class);
        $this->call(LocalPortfolioCategoriesTableSeeder::class);
        $this->call(LocalPortfolioCategoryPortfolioItemTableSeeder::class);
        $this->call(LocalPortfolioItemsTableSeeder::class);
        $this->call(LocalPostTagTableSeeder::class);
        $this->call(LocalPostsTableSeeder::class);
        $this->call(LocalPricingItemsTableSeeder::class);
        $this->call(LocalPricingPricingItemTableSeeder::class);
        $this->call(LocalPricingSectionsTableSeeder::class);
        $this->call(LocalPricingsTableSeeder::class);
        $this->call(LocalServiciosTableSeeder::class);
        $this->call(LocalShopItemsTableSeeder::class);
        $this->call(LocalShopSectionsTableSeeder::class);
        $this->call(LocalStylesTableSeeder::class);
        $this->call(LocalTagsTableSeeder::class);
        $this->call(LocalTextsTableSeeder::class);
        $this->call(LocalUsersTableSeeder::class);
    }
}
