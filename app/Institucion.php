<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    protected $table = "instituciones";

    protected $fillable = ['id', 'nombre_institucion', 'pais_institucion', 'direccion_institucion', 'fono_institucion', 'descripcion_institucion'];

    public function convenios(){
    	return $this->belongsToMany('App\Convenio')->withTimestamps();
    }
}
