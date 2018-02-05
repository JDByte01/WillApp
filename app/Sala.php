<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $table = 'Sala';
    protected $primarykey = 'id_sala';
    protected $fillable = array('nombre','id_lugar');
    //protected $hidden = ['create_at','update_at'];

    public function equipo(){
    	//Una sale tiene varios equipos
    	return $this->hasMany('App\Equipo');
    }

    public function lugar(){
    	//una sala esta en un lugar
    	return $this->belongsTo('App\Lugar');
    }
}
