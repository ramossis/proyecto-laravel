<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedidos extends Model
{
    use HasFactory;
    protected $table="pedidos";

    public function usuario(){
        return $this->belongsTo('App\Models\usuarios');
    }
}
