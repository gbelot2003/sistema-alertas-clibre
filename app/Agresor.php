<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Agresor extends Model {

	public function alertas()
	{
		return $this->belongsTo('App\Alerta');
	}

	public function tipoagresors()
	{
		return $this->belongsTo('App\Tipoagresor');
	}

	public function estadojudicials()
	{
		return $this->belongsTo('App\Estadojudicial');
	}

}
