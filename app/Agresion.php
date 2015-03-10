<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Agresion extends Model {

	public function agresioncategorias()
	{
		return $this->belongsTo('App\Agresioncategoria');
	}

}
