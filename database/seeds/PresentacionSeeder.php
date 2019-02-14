<?php

use Illuminate\Database\Seeder;
use App\Presentacion;

class PresentacionSeeder extends Seeder
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

        Presentacion::create([

        	'denominacion' => 'Modelo 34-A11'

        ]);

        factory(Presentacion::class)->create([
        	'denominacion' => 'Modelo G53-89'
        ]);

        factory(Presentacion::class)->create([
            'denominacion' => 'Modelo 86LA-12'
        ]);

        /*
        *   Ejecutando factory para crear 12 registros.
        */

        /*factory(Presentacion::class, 1)->create();*/
    }
}
