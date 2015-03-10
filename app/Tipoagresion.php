<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipoagresion extends Model {

	public function agresors()
	{
		$this->hasMany('App\Agresioncategoria');
	}

}
