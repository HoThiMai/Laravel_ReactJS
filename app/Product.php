<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
    public function type_products(){
        return $this->beLongsTo('App\TypeProduct','id_type','id');
    }
    public function color_products(){
        return $this->beLongsTo('App\Color','id_color','id');
    }
}
