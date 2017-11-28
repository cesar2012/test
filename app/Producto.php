<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	protected $fillable = ['codigo','nombreproducto','imagen','descripcion','categoria','stock','precio','visible','top'];
	public	$timestamps	=	false;
    //
}
