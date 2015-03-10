<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Mes extends Model {

	public function alertas()
	{
		$this->hasMany('App\Alerta');
	}


}
