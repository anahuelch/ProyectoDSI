<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Convenio;

class Actividad extends Model
{
    protected $table = "actividades";

    protected $fillable = ['id','nombre_actividad','fecha_inicio_actividad','fecha_termino_actividad','estado_actividad','descripcion_actividad'];

    public function convenios(){
    	return $this->belongsToMany('App\Convenio', 'id', 'id')->withTimestamps();
    }
}
