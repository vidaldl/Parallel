<?php

use Illuminate\Database\Seeder;
use App\Servicio;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicio1 = Servicio::create([
          'icon' => 'clipboard',
          'title' => 'Logística Aduanera',
          'contenido' => 'Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.'
        ]);
        $servicio2 = Servicio::create([
          'icon' => 'hotel',
          'title' => 'Hotelera',
          'contenido' => 'Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.'
        ]);
        $servicio3 = Servicio::create([
          'icon' => 'ship',
          'title' => 'Forwarders',
          'contenido' => 'Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.'
        ]);
        $servicio4 = Servicio::create([
          'icon' => 'warehouse',
          'title' => 'Almacenaje',
          'contenido' => 'Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.'
        ]);
        $servicio5 = Servicio::create([
          'icon' => 'truck-loading',
          'title' => 'Transporte',
          'contenido' => 'Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.'
        ]);
    }
}
