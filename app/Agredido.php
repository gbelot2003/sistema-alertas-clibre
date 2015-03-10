<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Agredido extends Model {

	public function alertas()
	{
		return $this->belongsTo('App\Alerta');
	}

	public function generos()
	{
		return $this->belongsTo('App\Generos');
	}

	public function medios()
	{
		return $this->belongsTo('App\Medio');
	}

	public function tiposujetoagredidos()
	{
		return $this->belongsTo('App\Tiposujetoagredido');
	}

	public function agresions()
	{
		return $this->belongsTo('App\Agresion');
	}

}
