<?php

use Illuminate\Database\Seeder;
use App\Style;

class StyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $style = Style::create([
          'primary_color' => '#3742fa',
          'button_primary' => '#3742fa',
          'button_secondary' => '#E04F00'
        ]);
    }
}
