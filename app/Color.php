<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table='colors';
    public function product(){
        return $this->hasMany('App\Product','id_color','id');
    }
}
