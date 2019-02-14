<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	

        /*
        *   Insersiones de datos.
        */

        Producto::create([

        	'denominacion' => 'Portatil Dell'

        ]);

        factory(Producto::class)->create([
        	'denominacion' => 'Portatil HP'
        ]);

        /*
        *   Ejecutando factory para crear 12 registros.
        */

        factory(Producto::class, 12)->create();

    }
}
