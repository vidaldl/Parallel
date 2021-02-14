<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OrdersUpdateTableSeeder::class);
        // $this->call(CatalogItemsTableSeeder::class);
        // $this->call(CatalogSectionsTableSeeder::class);
        // $this->call(CatalogItem2sTableSeeder::class);
        // $this->call(CatalogItem3sTableSeeder::class);
        // $this->call(CatalogSection2sTableSeeder::class);
        // $this->call(CatalogSection3sTableSeeder::class);
        // $this->call(FontsTableSeeder::class);
        // $this->call(FontStylesTableSeeder::class);
        // $this->call(ShopItemsTableSeeder::class);
        // $this->call(ShopSectionsTableSeeder::class);
        // $this->call(ModalsTableSeeder::class);
        // $this->call(TextsTableSeeder::class);
        // $this->call(ContenidoSection5sTableSeeder::class);
        // $this->call(PortfolioSectionsTableSeeder::class);
        // $this->call(Text2sTableSeeder::class);
        // $this->call(Text3sTableSeeder::class);
        // $this->call(Text4sTableSeeder::class);
        $this->call(ServiceSection2sTableSeeder::class);
        $this->call(Service2sTableSeeder::class);
        // $this->call(OrdersTableSeeder::class);
        $this->call(ReceiptInfosTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ContenidoAboutsTableSeeder::class);
        $this->call(ContenidoSection1sTableSeeder::class);
        $this->call(ContenidoSection2sTableSeeder::class);
        $this->call(ContenidoSection3sTableSeeder::class);
        $this->call(ContenidoSection4sTableSeeder::class);
        $this->call(ContenidoSectionFootersTableSeeder::class);
        $this->call(GalleriesTableSeeder::class);
        $this->call(GallerySectionsTableSeeder::class);
        $this->call(InfoSliderImage2sTableSeeder::class);
        $this->call(InfoSliderImage3sTableSeeder::class);
        $this->call(InfoSliderImagesTableSeeder::class);
        $this->call(InfoSliderText2sTableSeeder::class);
        $this->call(InfoSliderText3sTableSeeder::class);
        $this->call(InfoSliderTextsTableSeeder::class);
        $this->call(LinksTableSeeder::class);
        $this->call(LinkSectionsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(PostTagTableSeeder::class);
        $this->call(PricingsTableSeeder::class);
        $this->call(ServiciosTableSeeder::class);
        $this->call(StylesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}