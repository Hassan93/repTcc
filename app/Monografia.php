<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monografia extends Model
{
    protected $fillable = ['autor','supervisor','titulo', 'resumo', 'estado'];
    public function ficheiro()
    {
    	return $this->hasOne('App\Ficheiro');
    }

    public function area()
    {
    	return $this->belongsTo('App\Area');
    }

    public function curso()
    {
    	return $this->belongsTo('App\Curso');
    }
}
