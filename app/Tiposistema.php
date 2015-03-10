<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiposistema extends Model {

	public function medios()
	{
		$this->hasMany('App\Medio');
	}

}
