<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    use HasFactory;
    protected $table="categorias";

    public function productos(){
        return $this->hasMany('App\Models\productos');
    }
    public $timestamps = false;
}
