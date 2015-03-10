<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Medio extends Model {

	public function agredidos()
	{
		$this->hasMany('App\Agredidos');
	}

	public function tipomedios()
	{
		$this->belongsTo('App\Tipomedio');
	}


}
