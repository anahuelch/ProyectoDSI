<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Convenio extends Model
{
    protected $table = "convenios";

    protected $fillable = ['id', 'id_tipo', 'id_estado', 'id_area', 'id_coordinador', 'nombre_convenio','fecha_inicio','fecha_termino','descripcion_convenio'];


    public function coordinador(){
    	return $this->belongsTo('App\Coordinador', 'id', 'id');
    }

    public function tipo(){
    	return $this->belongsTo('App\Tipo', 'id', 'id');
    }

    public function area(){
    	return $this->belongsTo('App\Area', 'id', 'id');
    }

    public function estado(){
    	return $this->belongsTo('App\Estado', 'id', 'id');
    }

    public function instituciones(){
    	return $this->belongsToMany('App\Institucion')->withTimestamps();
    }

    public function actividades(){
    	return $this->belongsToMany('App\Actividad')->withTimestamps();
    }

    public function objetivos(){
    	return $this->belongsToMany('App\Objetivo')->withTimestamps();
    }
}
