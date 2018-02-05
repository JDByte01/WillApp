<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipamiento extends Model
{
    protected $table = 'Equipamiento';
    protected $primarykey = 'id_equipamiento';
    protected $fillable = array('nombre','descripcion','id_modelo','puerto_1','puerto_10','puerto_20','puerto_100','puerto_cobre');
    protected $hidden = ['create_at','update_at'];

    public function modelo(){
    	//Un equipamiento tiene un modelo
    	return $this->belongsTo('App\Modelo');
    }

    public function lista(){
    	//Un equipamiento esta en varias listas
    	return $this->hasMany('App\Lista')
    }
}
