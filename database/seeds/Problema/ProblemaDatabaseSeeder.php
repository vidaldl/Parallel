<?php

use Illuminate\Database\Seeder;

class ProblemaDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(ProblemaCatalogItem2sTableSeeder::class);
        $this->call(ProblemaCatalogItem3sTableSeeder::class);
        $this->call(ProblemaCatalogItemsTableSeeder::class);
        $this->call(ProblemaCatalogSection2sTableSeeder::class);
        $this->call(ProblemaCatalogSection3sTableSeeder::class);
        $this->call(ProblemaCatalogSectionsTableSeeder::class);
        $this->call(ProblemaContenidoAboutsTableSeeder::class);
        $this->call(ProblemaContenidoSection1sTableSeeder::class);
        $this->call(ProblemaContenidoSection2sTableSeeder::class);
        $this->call(ProblemaContenidoSection3sTableSeeder::class);
        $this->call(ProblemaContenidoSection4sTableSeeder::class);
        $this->call(ProblemaContenidoSection5sTableSeeder::class);
        $this->call(ProblemaContenidoSectionFootersTableSeeder::class);
        $this->call(ProblemaFilesTableSeeder::class);
        $this->call(ProblemaFontStylesTableSeeder::class);
        $this->call(ProblemaFontsTableSeeder::class);
        $this->call(ProblemaFooterLinksTableSeeder::class);
        $this->call(ProblemaFrasesTableSeeder::class);
        $this->call(ProblemaGalleryImagesTableSeeder::class);
        $this->call(ProblemaGalleryImagesGalleryItemTableSeeder::class);
        $this->call(ProblemaGalleryItemsTableSeeder::class);
        $this->call(ProblemaGallerySectionsTableSeeder::class);
        $this->call(ProblemaInfoSliderImage2sTableSeeder::class);
        $this->call(ProblemaInfoSliderImage3sTableSeeder::class);
        $this->call(ProblemaInfoSliderImagesTableSeeder::class);
        $this->call(ProblemaInfoSliderText2sTableSeeder::class);
        $this->call(ProblemaInfoSliderText3sTableSeeder::class);
        $this->call(ProblemaInfoSliderTextsTableSeeder::class);
        $this->call(ProblemaLinkSectionsTableSeeder::class);
        $this->call(ProblemaLinksTableSeeder::class);
        $this->call(ProblemaMenuItemsTableSeeder::class);
        $this->call(ProblemaModalsTableSeeder::class);
        $this->call(ProblemaOrdersTableSeeder::class);
        $this->call(ProblemaPortfolioCategoriesTableSeeder::class);
        $this->call(ProblemaPortfolioItemsTableSeeder::class);
        $this->call(ProblemaPostTagTableSeeder::class);
        $this->call(ProblemaPostsTableSeeder::class);
        $this->call(ProblemaPricingItemsTableSeeder::class);
        $this->call(ProblemaPricingPricingItemTableSeeder::class);
        $this->call(ProblemaPricingSectionsTableSeeder::class);
        $this->call(ProblemaPricingsTableSeeder::class);
        $this->call(ProblemaServiciosTableSeeder::class);
        $this->call(ProblemaStylesTableSeeder::class);
        $this->call(ProblemaTagsTableSeeder::class);
        $this->call(ProblemaTextsTableSeeder::class);
        $this->call(ProblemaUsersTableSeeder::class);
    }
}
