<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiposujetoagredido extends Model {

	public function agredidos()
	{
		return $this->hasMany('App\Agredido');
	}

}
