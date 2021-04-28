<?php

use Illuminate\Database\Seeder;

class MigrationToVPSDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(MigrationToVPSCatalogItem2sTableSeeder::class);
        $this->call(MigrationToVPSCatalogItem3sTableSeeder::class);
        $this->call(MigrationToVPSCatalogItemsTableSeeder::class);
        $this->call(MigrationToVPSCatalogSection2sTableSeeder::class);
        $this->call(MigrationToVPSCatalogSection3sTableSeeder::class);
        $this->call(MigrationToVPSCatalogSectionsTableSeeder::class);
        $this->call(MigrationToVPSCategoriesTableSeeder::class);
        $this->call(MigrationToVPSContactCategoriesTableSeeder::class);
        $this->call(MigrationToVPSContenidoAboutsTableSeeder::class);
        $this->call(MigrationToVPSContenidoSection1sTableSeeder::class);
        $this->call(MigrationToVPSContenidoSection2sTableSeeder::class);
        $this->call(MigrationToVPSContenidoSection3sTableSeeder::class);
        $this->call(MigrationToVPSContenidoSection4sTableSeeder::class);
        $this->call(MigrationToVPSContenidoSection5sTableSeeder::class);
        $this->call(MigrationToVPSContenidoSectionFootersTableSeeder::class);
        $this->call(MigrationToVPSFontStylesTableSeeder::class);
        $this->call(MigrationToVPSFontsTableSeeder::class);
        $this->call(MigrationToVPSFrasesTableSeeder::class);
        $this->call(MigrationToVPSGalleriesTableSeeder::class);
        $this->call(MigrationToVPSGalleryItemsTableSeeder::class);
        $this->call(MigrationToVPSGallerySectionsTableSeeder::class);
        $this->call(MigrationToVPSInfoSliderImage2sTableSeeder::class);
        $this->call(MigrationToVPSInfoSliderImagesTableSeeder::class);
        $this->call(MigrationToVPSInfoSliderText2sTableSeeder::class);
        $this->call(MigrationToVPSInfoSliderText3sTableSeeder::class);
        $this->call(MigrationToVPSInfoSliderTextsTableSeeder::class);
        $this->call(MigrationToVPSLinkSectionsTableSeeder::class);
        $this->call(MigrationToVPSLinksTableSeeder::class);
        $this->call(MigrationToVPSMenuItemsTableSeeder::class);
        $this->call(MigrationToVPSModalsTableSeeder::class);
        $this->call(MigrationToVPSOrdersTableSeeder::class);
        $this->call(MigrationToVPSPortfolioCategoriesTableSeeder::class);
        $this->call(MigrationToVPSPortfolioCategoryPortfolioItemTableSeeder::class);
        $this->call(MigrationToVPSPortfolioItemsTableSeeder::class);
        $this->call(MigrationToVPSPortfolioSectionsTableSeeder::class);
        $this->call(MigrationToVPSPostsTableSeeder::class);
        $this->call(MigrationToVPSPricingItemsTableSeeder::class);
        $this->call(MigrationToVPSPricingPricingItemTableSeeder::class);
        $this->call(MigrationToVPSPricingSectionsTableSeeder::class);
        $this->call(MigrationToVPSPricingsTableSeeder::class);
        $this->call(MigrationToVPSService2sTableSeeder::class);
        $this->call(MigrationToVPSServiceSection2sTableSeeder::class);
        $this->call(MigrationToVPSServiciosTableSeeder::class);
        $this->call(MigrationToVPSStylesTableSeeder::class);
        $this->call(MigrationToVPSText2sTableSeeder::class);
        $this->call(MigrationToVPSText3sTableSeeder::class);
        $this->call(MigrationToVPSText4sTableSeeder::class);
        $this->call(MigrationToVPSTextsTableSeeder::class);
        $this->call(MigrationToVPSUsersTableSeeder::class);
    }
}
