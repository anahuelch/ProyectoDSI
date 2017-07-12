<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Convenio;

class Objetivo extends Model
{
    protected $table = "objetivos";

    protected $fillable = ['id', 'objetivo', 'descripcion_objetivo'];

    public function convenios(){
    	return $this->belongsToMany('App\Convenio', 'id', 'id')->withTimestamps();
    }
}
