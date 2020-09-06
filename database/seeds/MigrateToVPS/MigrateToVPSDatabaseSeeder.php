<?php

use Illuminate\Database\Seeder;

class MigrateToVPSDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(MigrateToVPSCatalogItem2sTableSeeder::class);
        $this->call(MigrateToVPSCatalogItem3sTableSeeder::class);
        $this->call(MigrateToVPSCatalogItemsTableSeeder::class);
        $this->call(MigrateToVPSCatalogSection2sTableSeeder::class);
        $this->call(MigrateToVPSCatalogSection3sTableSeeder::class);
        $this->call(MigrateToVPSCatalogSectionsTableSeeder::class);
        $this->call(MigrateToVPSCategoriesTableSeeder::class);
        $this->call(MigrateToVPSContenidoAboutsTableSeeder::class);
        $this->call(MigrateToVPSContenidoSection1sTableSeeder::class);
        $this->call(MigrateToVPSContenidoSection2sTableSeeder::class);
        $this->call(MigrateToVPSContenidoSection3sTableSeeder::class);
        $this->call(MigrateToVPSContenidoSection4sTableSeeder::class);
        $this->call(MigrateToVPSContenidoSection5sTableSeeder::class);
        $this->call(MigrateToVPSContenidoSectionFootersTableSeeder::class);
        $this->call(MigrateToVPSFontStylesTableSeeder::class);
        $this->call(MigrateToVPSFontsTableSeeder::class);
        $this->call(MigrateToVPSFrasesTableSeeder::class);
        $this->call(MigrateToVPSGalleriesTableSeeder::class);
        $this->call(MigrateToVPSGallerySectionsTableSeeder::class);
        $this->call(MigrateToVPSInfoSliderImage2sTableSeeder::class);
        $this->call(MigrateToVPSInfoSliderImage3sTableSeeder::class);
        $this->call(MigrateToVPSInfoSliderImagesTableSeeder::class);
        $this->call(MigrateToVPSInfoSliderText2sTableSeeder::class);
        $this->call(MigrateToVPSInfoSliderText3sTableSeeder::class);
        $this->call(MigrateToVPSInfoSliderTextsTableSeeder::class);
        $this->call(MigrateToVPSLinkSectionsTableSeeder::class);
        $this->call(MigrateToVPSLinksTableSeeder::class);
        $this->call(MigrateToVPSMenuItemsTableSeeder::class);
        $this->call(MigrateToVPSModalsTableSeeder::class);
        $this->call(MigrateToVPSOrdersTableSeeder::class);
        $this->call(MigrateToVPSPortfolioCategoriesTableSeeder::class);
        $this->call(MigrateToVPSPortfolioCategoryPortfolioItemTableSeeder::class);
        $this->call(MigrateToVPSPortfolioItemsTableSeeder::class);
        $this->call(MigrateToVPSPortfolioSectionsTableSeeder::class);
        $this->call(MigrateToVPSPostTagTableSeeder::class);
        $this->call(MigrateToVPSPostsTableSeeder::class);
        $this->call(MigrateToVPSPricingsTableSeeder::class);
        $this->call(MigrateToVPSReceiptInfosTableSeeder::class);
        $this->call(MigrateToVPSService2sTableSeeder::class);
        $this->call(MigrateToVPSServiceSection2sTableSeeder::class);
        $this->call(MigrateToVPSServiciosTableSeeder::class);
        $this->call(MigrateToVPSStylesTableSeeder::class);
        $this->call(MigrateToVPSTagsTableSeeder::class);
        $this->call(MigrateToVPSText2sTableSeeder::class);
        $this->call(MigrateToVPSText3sTableSeeder::class);
        $this->call(MigrateToVPSText4sTableSeeder::class);
        $this->call(MigrateToVPSTextsTableSeeder::class);
        $this->call(MigrateToVPSUsersTableSeeder::class);
    }
}
