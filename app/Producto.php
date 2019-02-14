<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "productos";

    protected $fillable = ['denominacion'];

    /**
     * Las presentaciones de un producto.
     */
    public function presentaciones()
    {
        return $this->belongsToMany(Presentacion::class, 'product_present')->withPivot('costo')->withTimestamps();
    }
}
