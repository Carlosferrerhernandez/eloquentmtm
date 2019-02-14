<?php

use Illuminate\Database\Seeder;
use App\Producto;
use App\Presentacion;

class Product_PresentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/*
    	*	Obtener los id.
    	*/

		$producto_id1 = Producto::select('id')->where('denominacion', 'Portatil Dell')->value('id');

		$presentacion_id1 = Presentacion::select('id')->where('denominacion', '=', 'Modelo 34-A11')->value('id');

		$producto_id2 = Producto::select('id')->where('denominacion', '=', 'Portatil HP')->value('id');

		$presentacion_id2 = Presentacion::select('id')->where('denominacion', '=', 'Modelo G53-89')->value('id');

        $presentacion_id3 = Presentacion::select('id')->where('denominacion', '=', 'Modelo 86LA-12')->value('id');

		/*
		*	Insersiones de datos.
		*/

		DB::table('product_present')->insert([

        	'producto_id' => $producto_id1,
        	'presentacion_id' => $presentacion_id1,
        	'costo' => '1856000'

        ]);

        DB::table('product_present')->insert([

        	'producto_id' => $producto_id2,
        	'presentacion_id' => $presentacion_id2,
        	'costo' => '2389000'
        ]);

        DB::table('product_present')->insert([

            'producto_id' => $producto_id2,
            'presentacion_id' => $presentacion_id3,
            'costo' => '1289000'
        ]);
    }
}
