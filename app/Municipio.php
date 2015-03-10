<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model {

	public function alertas()
	{
		$this->hasMany('App\Alerta');
	}

	public function departamentos()
	{
		$this->hasMany('App\Departamento');
	}

}
