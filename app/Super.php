<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Super extends Model
{
    protected $fillable = ['codigo', 'nombreproducto', 'descripcion', 'imagen', 'categoria', 'stock', 'precio', 'visible', 'top'];
}
