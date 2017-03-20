<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function monografias()
    {
    	return $this->hasMany('App\Monografia');
    }

    public function cursos()
    {
    	return $this->hasMany('App\Curso');
    }
}
