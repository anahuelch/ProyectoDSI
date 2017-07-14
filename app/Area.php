<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Convenio;

class Area extends Model
{
    protected $table = "areas";

    protected $fillable = ['id', 'nombre_area','descripcion_area'];

    public function convenios(){
    	return $this->hasMany('App\Convenio', 'id', 'id');
    }
}
