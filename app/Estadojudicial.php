<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Estadojudicial extends Model {

	public function agresors()
	{
		$this->hasMany('App\Estadojuridico');
	}

}
