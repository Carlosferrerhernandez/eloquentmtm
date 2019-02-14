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
    	/*
    	*	Asignando las tablas a recorrer dentro del metodo.
    	*/

        $this->truncateTables([
            'productos',
            'presentaciones',
            'product_present',
        ]);	


        /*
        *	Llamado a los seeders.
        */

        $this->call(ProductoSeeder::class);
        $this->call(PresentacionSeeder::class);
        $this->call(Product_PresentSeeder::class);
    }

    /*
    * Metodo para desactivar validaciones en llaves foreaneas y eliminar tablas.
    */

    public function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
 
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
 
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
