<?php

use Illuminate\Database\Seeder;

class UltimoDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(UltimoCatalogItem2sTableSeeder::class);
        $this->call(UltimoCatalogItem3sTableSeeder::class);
        $this->call(UltimoCatalogItemsTableSeeder::class);
        $this->call(UltimoCatalogSection2sTableSeeder::class);
        $this->call(UltimoCatalogSection3sTableSeeder::class);
        $this->call(UltimoCatalogSectionsTableSeeder::class);
        $this->call(UltimoContenidoAboutsTableSeeder::class);
        $this->call(UltimoContenidoSection1sTableSeeder::class);
        $this->call(UltimoContenidoSection2sTableSeeder::class);
        $this->call(UltimoContenidoSection3sTableSeeder::class);
        $this->call(UltimoContenidoSection4sTableSeeder::class);
        $this->call(UltimoContenidoSection5sTableSeeder::class);
        $this->call(UltimoContenidoSectionFootersTableSeeder::class);
        $this->call(UltimoFilesTableSeeder::class);
        $this->call(UltimoFontStylesTableSeeder::class);
        $this->call(UltimoFontsTableSeeder::class);
        $this->call(UltimoFrasesTableSeeder::class);
        $this->call(UltimoGalleriesTableSeeder::class);
        $this->call(UltimoGalleryImagesTableSeeder::class);
        $this->call(UltimoGalleryImagesGalleryItemTableSeeder::class);
        $this->call(UltimoGalleryItemsTableSeeder::class);
        $this->call(UltimoGallerySectionsTableSeeder::class);
        $this->call(UltimoInfoSliderImage2sTableSeeder::class);
        $this->call(UltimoInfoSliderImage3sTableSeeder::class);
        $this->call(UltimoInfoSliderImagesTableSeeder::class);
        $this->call(UltimoInfoSliderText2sTableSeeder::class);
        $this->call(UltimoInfoSliderText3sTableSeeder::class);
        $this->call(UltimoInfoSliderTextsTableSeeder::class);
        $this->call(UltimoLinkSectionsTableSeeder::class);
        $this->call(UltimoLinksTableSeeder::class);
        $this->call(UltimoMenuItemsTableSeeder::class);
        $this->call(UltimoModalsTableSeeder::class);
        $this->call(UltimoOrdersTableSeeder::class);
        $this->call(UltimoPasswordResetsTableSeeder::class);
        $this->call(UltimoPortfolioCategoriesTableSeeder::class);
        $this->call(UltimoPostTagTableSeeder::class);
        $this->call(UltimoPostsTableSeeder::class);
        $this->call(UltimoPricingSectionsTableSeeder::class);
        $this->call(UltimoPricingsTableSeeder::class);
        $this->call(UltimoServiciosTableSeeder::class);
        $this->call(UltimoStylesTableSeeder::class);
        $this->call(UltimoTagsTableSeeder::class);
        $this->call(UltimoTextsTableSeeder::class);
        $this->call(UltimoUsersTableSeeder::class);
    }
}
