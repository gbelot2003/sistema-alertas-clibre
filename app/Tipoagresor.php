<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipoagresor extends Model {

	public function Agresor()
	{
		$this->hasMany('App\Agresor');
	}

}
