<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'Usuario';
    protected $primarykey = 'id_usuario';
    protected $fillable = array('nombre','contrasena','id_permiso');
    protected $hidden = ['create_at','update_at'];

    public function permiso(){
    	//Un usuaro tiene un permiso
    	return $this->belongTo('App\Permiso');
    }

    public function log(){
    	//Un usuario teien muchos registro
    	return $this->hasMany('App\Log');
    }

    public function historial(){
    	//Un usuario esta en varios historiales
    	return $this->hasMany('App\Historial');
    }
}
