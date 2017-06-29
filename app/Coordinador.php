<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinador extends Model
{
    protected $table = "coordinadores";

    protected $fillable = ['id','rut_coordinador','nombre_coordinador','sexo_coordinador','fono_coordinador','correo_coordinador'];

    public function convenios(){
    	return $this->hasMany('App\Convenio');
    }
}
