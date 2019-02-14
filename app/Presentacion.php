<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presentacion extends Model
{
    protected $table = "presentaciones";

    protected $fillable = ['denominacion'];

    /**
     * Los productos de una presentacion.
     */
    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'product_present')->withPivot('costo')->withTimestamps();
    }
}
