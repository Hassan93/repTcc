<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
     public function monografias()
{
	return $this->hasMany('App\Monografia');
}

public function area()
{
	return $this->belongsTo('App\Area');
}
}
