<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $fillable = ['nombre','nacionalidad','sexo','tipo_actor','id_pelicula'];

    public function pelicula()
	{
		return $this->belongsTo('App\Pelicula', 'id_pelicula', 'id');
	}
}
