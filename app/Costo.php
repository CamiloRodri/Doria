<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Costo extends Model
{
    //
    protected $table = 'produccion';

    protected $fillable = [
        'produccion_id', 'precio', 'proovedor_id'
    ];
}
