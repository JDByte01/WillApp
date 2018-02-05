<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //Nombre de la tabla en MySQL
    protected $table = 'Categoria';

    //primary Key id
    protected $primaryKey = 'id_categoria';

    //Atributos que se pueden asignar de manera masiva
    protected $fillable = array('nombre');
    //Campos que no queremos que se devuelvan en las consultas
    protected $hidden = ['create_at','update_at'];

    //Relación de una categoria con un lugar
    public function lugar(){
    	//1 categoria pertenese a muchos lugares
    	return $this->hasMany('App\Lugar');
    }
}
