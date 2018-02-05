<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accion extends Model
{
    protected $table = 'Accion';
    protected $primarykey = 'id_accion';
    protected $fillable = array('nombre');
    protected $hidden = ['create_at', 'Update_at'];

    public function historial(){
    	//una ación esta en varios historiales
    	return $this->hasMany('App\Historial');
    }
}
