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
        // $this->call(ContenidoSeeder::class);
        // $this->call(PostContentSeeder::class);
        // $this->call(ServicioSeeder::class);
        // $this->call(UsersTableSeeder::class);
        // $this->call(StyleSeeder::class);
        // $this->call(Section1Seeder::class);
        // $this->call(InfoSlidersSeeder::class);
        // $this->call(PricingSeeder::class);
        $this->call(InfoSlidersSeeder2::class);
        $this->call(InfoSlidersSeeder3::class);
    }
}
