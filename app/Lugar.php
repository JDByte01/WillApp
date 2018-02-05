<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    //Nombre de la tabla en MySQL
    protected $table = 'Lugar';
    //Primary Key
    protected $primaryKey = 'id_lugar';
    //Atributos que se pueden asignar de manera masiva
    protected $fillable = array('nombre','id_categoria');
    //Campos que no queremos que se devuelvan en las consultas
    protected $hidden = ['create_at','update_at'];

    //Relación de una categoria con un lugar
    public function categoria(){
    	//1 categoria pertenese a muchos lugares
    	return $this->belongsTo('App\Categoria');
    }

    public function sala(){
    	//Un lugar tiene varias salas
    	return $this->hasMany('App\Sala');
    }
}
