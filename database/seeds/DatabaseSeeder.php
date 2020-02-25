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
        // $this->call(OrdersTableSeeder::class);
        // $this->call(CatalogItemsTableSeeder::class);
        // $this->call(CatalogSectionsTableSeeder::class);
        // $this->call(CatalogItem2sTableSeeder::class);
        // $this->call(CatalogItem3sTableSeeder::class);
        // $this->call(CatalogSection2sTableSeeder::class);
        // $this->call(CatalogSection3sTableSeeder::class);
        $this->call(FontsTableSeeder::class);
        $this->call(FontStylesTableSeeder::class);
    }
}
