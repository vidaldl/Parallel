<?php

use Illuminate\Database\Seeder;
use App\Pricing;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $pricing1 = Pricing::create([
            'image' => 'content/price1.png',
            'title' => 'PERSONAL',
            'item1' => 'CUSTOM DOMAINS',
            'item2' => 'SLEEPS AFTER 30 MINS OF INACTIVITY',
            'price' => 'FREE',
            'button' => 'Registrate'
          ]);

          $pricing2 = Pricing::create([
            'image' => 'content/price2.png',
            'title' => 'SMALL TEAM',
            'item1' => 'NEVER SLEEPS',
            'item2' => 'MULTIPLE WORKERS FOR MORE POWERFUL APPS',
            'price' => '$150',
            'button' => 'Registrate'
          ]);

          $pricing3 = Pricing::create([
            'image' => 'content/price3.png',
            'title' => 'ENTERPRISE',
            'item1' => 'DEDICATED',
            'item2' => 'SIMPLE HORIZONTAL SCALABILITY',
            'price' => '$400',
            'button' => 'Registrate'
          ]);
    }
}
