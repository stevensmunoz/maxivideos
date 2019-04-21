<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    protected $fillable = ['id_pelicula','id_cliente','fecha_alquiler','fecha_devolucion'];

    public function pelicula()
	{
		return $this->belongsTo('App\Pelicula', 'id_pelicula', 'id');
	}

    public function cliente()
	{
		return $this->belongsTo('App\Cliente', 'id_cliente', 'id');
	}
}
