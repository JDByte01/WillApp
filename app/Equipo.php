<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'Equipo';
    protected $primarykey = 'id_equipo';
    protected $fillable = array('id_marca','id_modelo','neomonico','serie','id_sala');
    protected $hidden = ['create_at','update_at'];

    public function lista(){
    	//un equipo esta en varias listas
    	return $this->hasMany('App\Lista');
    }

    public function modelo(){
    	//Un equipo tiene un modelo
    	return $this->belongsTo('App\Modelo');
    }

    public function historial(){
    	//Un equipo esta en varios historiales
    	return $this->hasMany('App\Historial');
    }

    public function marca(){
    	//Un equipo tiene una marcha
    	return $this->belongsTo('App\Marca');
    }

    public function sala(){
    	//Un equipo esta en una sala
    	return $this->belongsTo('App\Sala');
    }
}
