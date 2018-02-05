<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'Marca';
    protected $primarykey = 'id_marca';
    protected $fillable = array('nombre');
    protected $hidden = ['create_at', 'Update_at'];

    public function Equipo(){
    	//Una marca esta en varios equipos
    	return $this->hasMany('App\Equipo');
    }
}
