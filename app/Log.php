<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'Log';
    protected $primarykey = 'id_log';
    protected $fillable = array('id_usuario','fecha','ip');
    //protected $hidden = ['create_at','update_at'];

    public function usuario(){
    	//Un registro le pertenece a un usuario
    	return $this->belongsTo('App\Usuario');
    }
}
