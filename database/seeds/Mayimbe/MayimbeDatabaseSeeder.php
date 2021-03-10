<?php

use Illuminate\Database\Seeder;

class MayimbeDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(MayimbeCatalogItem2sTableSeeder::class);
        $this->call(MayimbeCatalogItem3sTableSeeder::class);
        $this->call(MayimbeCatalogItemsTableSeeder::class);
        $this->call(MayimbeCatalogSection2sTableSeeder::class);
        $this->call(MayimbeCatalogSection3sTableSeeder::class);
        $this->call(MayimbeCatalogSectionsTableSeeder::class);
        $this->call(MayimbeContenidoAboutsTableSeeder::class);
        $this->call(MayimbeContenidoSection1sTableSeeder::class);
        $this->call(MayimbeContenidoSection2sTableSeeder::class);
        $this->call(MayimbeContenidoSection3sTableSeeder::class);
        $this->call(MayimbeContenidoSection4sTableSeeder::class);
        $this->call(MayimbeContenidoSection5sTableSeeder::class);
        $this->call(MayimbeContenidoSectionFootersTableSeeder::class);
        $this->call(MayimbeFilesTableSeeder::class);
        $this->call(MayimbeFontStylesTableSeeder::class);
        $this->call(MayimbeFontsTableSeeder::class);
        $this->call(MayimbeFooterLinksTableSeeder::class);
        $this->call(MayimbeFrasesTableSeeder::class);
        $this->call(MayimbeGalleryImagesTableSeeder::class);
        $this->call(MayimbeGalleryImagesGalleryItemTableSeeder::class);
        $this->call(MayimbeGalleryItemsTableSeeder::class);
        $this->call(MayimbeGallerySectionsTableSeeder::class);
        $this->call(MayimbeInfoSliderImage2sTableSeeder::class);
        $this->call(MayimbeInfoSliderImage3sTableSeeder::class);
        $this->call(MayimbeInfoSliderImagesTableSeeder::class);
        $this->call(MayimbeInfoSliderText2sTableSeeder::class);
        $this->call(MayimbeInfoSliderText3sTableSeeder::class);
        $this->call(MayimbeInfoSliderTextsTableSeeder::class);
        $this->call(MayimbeLinkSectionsTableSeeder::class);
        $this->call(MayimbeLinksTableSeeder::class);
        $this->call(MayimbeMenuItemsTableSeeder::class);
        $this->call(MayimbeModalsTableSeeder::class);
        $this->call(MayimbeOrdersTableSeeder::class);
        $this->call(MayimbePortfolioCategoriesTableSeeder::class);
        $this->call(MayimbePortfolioItemsTableSeeder::class);
        $this->call(MayimbePostTagTableSeeder::class);
        $this->call(MayimbePostsTableSeeder::class);
        $this->call(MayimbePricingItemsTableSeeder::class);
        $this->call(MayimbePricingPricingItemTableSeeder::class);
        $this->call(MayimbePricingSectionsTableSeeder::class);
        $this->call(MayimbePricingsTableSeeder::class);
        $this->call(MayimbeServiciosTableSeeder::class);
        $this->call(MayimbeStylesTableSeeder::class);
        $this->call(MayimbeTagsTableSeeder::class);
        $this->call(MayimbeTextsTableSeeder::class);
        $this->call(MayimbeUsersTableSeeder::class);
    }
}
