<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $table = 'Permiso';
    protected $primarykey = 'id_permiso';
    protected $fillable = array('nombre','descripcion');
    protected $hidden = ['create_at', 'Update_at'];

    public function usuario(){
    	//Un permiso tiene muchos usuario
    	return $this->hasMany('App\Usuario');
    }
}
