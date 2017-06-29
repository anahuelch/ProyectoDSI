<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = "estados";

    protected $fillable = ['id', 'estado'];

    public function convenios(){
    	return $this->hasMany('App\Convenio');
    }
}
