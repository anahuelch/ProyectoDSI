<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objetivo extends Model
{
    protected $table = "objetivos";

    protected $fillable = ['id', 'objetivo', 'descripcion_objetivo'];

    public function convenios(){
    	return $this->belongsToMany('App\Convenio')->withTimestamps();
    }
}
