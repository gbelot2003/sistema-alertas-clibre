<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model {

	public function agredidos()
	{
		$this->hasMany('App\Agredido');
	}


}
