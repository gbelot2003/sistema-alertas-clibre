<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Agresioncategoria extends Model {

	public function agresions()
	{
		return $this->hasMany('App\Agresion');
	}

	public function tipoagresions()
	{
		$this->belongsTo("App\Tipoagresion");
	}

}
