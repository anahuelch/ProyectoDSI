<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Convenio;

class Tipo extends Model
{
    protected $table = "tipos";

    protected $fillable = ['id','tipo_convenio'];

    public function convenios(){
    	return $this->hasMany('App\Convenio','id', 'id');
    }
}
