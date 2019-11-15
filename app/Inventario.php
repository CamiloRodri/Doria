<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    //
    protected $table = 'inventario';

    protected $fillable = [
        'cantidad', 'precio_neto', 'producto_id'
    ];

    public function carrito()
    {
       return $this->hasMany(Carrito::class);
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

}
