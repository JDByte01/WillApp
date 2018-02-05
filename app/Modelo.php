<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    protected $table = 'Modelo';
    protected $primarykey = 'id_modelo';
    protected $fillable = array('nombre');
    protected $hidden = ['create_at', 'Update_at'];

    public function equipamiento(){
        //un modelo esta en varios equipamientos
    	return $this->hasMany('App\Equipamiento');
    }

    public function equipo(){
        //Un modelo esta en varios equipos
    	return $this->hasMany('App\Equipo');
    }
}

