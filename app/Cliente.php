<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['cedula','nombre','direccion','telefono','correo'];

    public function alquiler()
	{
		return $this->belongsTo('App\Alquiler', 'id_cliente', 'id');
	}

}
