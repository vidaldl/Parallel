<?php

use Illuminate\Database\Seeder;

class TextSectionDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(TextSectionCatalogItem2sTableSeeder::class);
        $this->call(TextSectionCatalogItem3sTableSeeder::class);
        $this->call(TextSectionCatalogItemsTableSeeder::class);
        $this->call(TextSectionCatalogSection2sTableSeeder::class);
        $this->call(TextSectionCatalogSection3sTableSeeder::class);
        $this->call(TextSectionCatalogSectionsTableSeeder::class);
        $this->call(TextSectionContenidoAboutsTableSeeder::class);
        $this->call(TextSectionContenidoSection1sTableSeeder::class);
        $this->call(TextSectionContenidoSection2sTableSeeder::class);
        $this->call(TextSectionContenidoSection3sTableSeeder::class);
        $this->call(TextSectionContenidoSection4sTableSeeder::class);
        $this->call(TextSectionContenidoSection5sTableSeeder::class);
        $this->call(TextSectionContenidoSectionFootersTableSeeder::class);
        $this->call(TextSectionFilesTableSeeder::class);
        $this->call(TextSectionFontStylesTableSeeder::class);
        $this->call(TextSectionFontsTableSeeder::class);
        $this->call(TextSectionFooterLinksTableSeeder::class);
        $this->call(TextSectionFrasesTableSeeder::class);
        $this->call(TextSectionGalleryImagesTableSeeder::class);
        $this->call(TextSectionGalleryImagesGalleryItemTableSeeder::class);
        $this->call(TextSectionGalleryItemsTableSeeder::class);
        $this->call(TextSectionGallerySectionsTableSeeder::class);
        $this->call(TextSectionInfoSliderImage2sTableSeeder::class);
        $this->call(TextSectionInfoSliderImage3sTableSeeder::class);
        $this->call(TextSectionInfoSliderImagesTableSeeder::class);
        $this->call(TextSectionInfoSliderText2sTableSeeder::class);
        $this->call(TextSectionInfoSliderText3sTableSeeder::class);
        $this->call(TextSectionInfoSliderTextsTableSeeder::class);
        $this->call(TextSectionLinkSectionsTableSeeder::class);
        $this->call(TextSectionLinksTableSeeder::class);
        $this->call(TextSectionMenuItemsTableSeeder::class);
        $this->call(TextSectionModalsTableSeeder::class);
        $this->call(TextSectionOrdersTableSeeder::class);
        $this->call(TextSectionPortfolioCategoriesTableSeeder::class);
        $this->call(TextSectionPortfolioItemsTableSeeder::class);
        $this->call(TextSectionPostTagTableSeeder::class);
        $this->call(TextSectionPostsTableSeeder::class);
        $this->call(TextSectionPricingItemsTableSeeder::class);
        $this->call(TextSectionPricingPricingItemTableSeeder::class);
        $this->call(TextSectionPricingSectionsTableSeeder::class);
        $this->call(TextSectionPricingsTableSeeder::class);
        $this->call(TextSectionServiciosTableSeeder::class);
        $this->call(TextSectionStylesTableSeeder::class);
        $this->call(TextSectionTagsTableSeeder::class);
        $this->call(TextSectionUsersTableSeeder::class);
    }
}
