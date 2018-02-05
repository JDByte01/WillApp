<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    protected $table = 'Lista';
    protected $primarykey = 'id_lista';
    protected $fillable = array('id_equipo','id_equipamiento');
    protected $hidden = ['create_at','update_at'];

    public function equipamiento(){
    	//Una lista tiene un quipamiento
    	return $this->belongsTo('App\Equipamiento');
    }

    public function equipo(){
    	//Una lista tiene un equipo
    	return $this->belongsTo('App\Equipo');
    }
}
