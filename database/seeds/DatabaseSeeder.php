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
        $this->call(OrdersTableSeeder::class);
        $this->call(CatalogItemsTableSeeder::class);
        $this->call(CatalogSectionsTableSeeder::class);
    }
}
