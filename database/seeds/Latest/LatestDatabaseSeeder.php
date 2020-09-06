<?php

use Illuminate\Database\Seeder;

class LatestDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(LatestCatalogItem2sTableSeeder::class);
        $this->call(LatestCatalogItem3sTableSeeder::class);
        $this->call(LatestCatalogItemsTableSeeder::class);
        $this->call(LatestCatalogSection2sTableSeeder::class);
        $this->call(LatestCatalogSection3sTableSeeder::class);
        $this->call(LatestCatalogSectionsTableSeeder::class);
        $this->call(LatestCategoriesTableSeeder::class);
        // $this->call(LatestCitiesTableSeeder::class);
        $this->call(LatestContenidoAboutsTableSeeder::class);
        $this->call(LatestContenidoSection1sTableSeeder::class);
        $this->call(LatestContenidoSection2sTableSeeder::class);
        $this->call(LatestContenidoSection3sTableSeeder::class);
        $this->call(LatestContenidoSection4sTableSeeder::class);
        $this->call(LatestContenidoSection5sTableSeeder::class);
        $this->call(LatestContenidoSectionFootersTableSeeder::class);
        // $this->call(LatestFeaturesTableSeeder::class);
        $this->call(LatestFrasesTableSeeder::class);
        $this->call(LatestGalleriesTableSeeder::class);
        $this->call(LatestGallerySectionsTableSeeder::class);
        $this->call(LatestInfoSliderImage2sTableSeeder::class);
        $this->call(LatestInfoSliderImage3sTableSeeder::class);
        $this->call(LatestInfoSliderImagesTableSeeder::class);
        $this->call(LatestInfoSliderText2sTableSeeder::class);
        $this->call(LatestInfoSliderText3sTableSeeder::class);
        $this->call(LatestInfoSliderTextsTableSeeder::class);
        $this->call(LatestLinkSectionsTableSeeder::class);
        $this->call(LatestLinksTableSeeder::class);
        $this->call(LatestMenuItemsTableSeeder::class);
        $this->call(LatestOrdersTableSeeder::class);
        $this->call(LatestPortfolioCategoriesTableSeeder::class);
        $this->call(LatestPortfolioCategoryPortfolioItemTableSeeder::class);
        $this->call(LatestPortfolioItemsTableSeeder::class);
        $this->call(LatestPostTagTableSeeder::class);
        $this->call(LatestPostsTableSeeder::class);
        $this->call(LatestPricingsTableSeeder::class);
        // $this->call(LatestPropertiesTableSeeder::class);
        // $this->call(LatestSectionPropertiesTableSeeder::class);
        $this->call(LatestServiciosTableSeeder::class);
        $this->call(LatestStylesTableSeeder::class);
        $this->call(LatestTagsTableSeeder::class);
        $this->call(LatestUsersTableSeeder::class);
    }
}
