<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Alerta extends Model {

	public function meses()
	{
		$this->belongsTo('App\Mes');
	}

	public function departamentos()
	{
		$this->belongsTo('App\Departamento');
	}

	public function municipios()
	{
		$this->belongsTo('App\Municipio');
	}

	public function Agresors()
	{
		$this->hasMany('App\Agresor');
	}

	public function Agredidos()
	{
		$this->hasMany('App\Agredido');
	}
}
