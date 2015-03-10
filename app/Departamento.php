<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model {

	public function alertas()
	{
		$this->hasMany('App\Alerta');
	}

	public function municipios()
	{
		$this->belongsTo('App\Minicipio');
	}

}
