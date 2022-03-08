<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class catogory extends Model
{
    public function products(){
        return $this->hasMany(App\product::class,'catogory_id','id');
    }
}
