<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $fillable = ['nombre','nacionalidad','productora','fecha_creacion','ejemplares','id_director'];

    public function actor()
	{
		return $this->belongsTo('App\Actor', 'id_director', 'id');
	}


    public function director()
	{
		return $this->belongsTo('App\Director', 'id_director', 'id');
    }

    public function alquiler()
	{
		return $this->belongsTo('App\Alquiler', 'id_pelicula', 'id');
	}
}
