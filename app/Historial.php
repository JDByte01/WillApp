<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    protected $table = 'Historial';
    protected $primarykey = 'id_historial';
    protected $fillable = array('id_usuario','id_accion','hora','fecha','id_equipo');
    //protected $hidden = ['create_at','update_at'];

    public function equipo(){
    	//Un historial tiene un equipo
    	return $this->belongsTo('App\Equipo');
    }

    public function usuario(){
    	//Un historial tiene un usuarios
    	return $this->belongsTo('App\usuario');
    }

    public function accion(){
    	//Un historial tiene una accion
    	return $this->belongsTo('App\Accion')
    }
}
