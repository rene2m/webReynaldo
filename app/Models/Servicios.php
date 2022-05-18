<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
     use HasFactory;
     protected $guarded = [];
    protected $table = 'servicios';
    protected $fillable = ['name' , 'slug','descripcion'];
    
    public function profesiones(){
        return $this->hasMany('App\Models\Profesiones');
    }
}
