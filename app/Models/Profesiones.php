<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Servicios;

class Profesiones extends Model
{
       use HasFactory;
       protected $guarded = [];
    //    protected $table = 'profesiones';
    // protected $fillable = ['name' , 'slug','descriptions', 'extract', 'price', 'image', 'visible', 'servicio_id'];
    public function servicio(){
        // dd($this->belongsTo('App\Models\Servicios'));
        // return $this->belongsTo('App\Models\Servicios');
        // dd( $this->belongsTo(Servicios::Class));
        return $this->belongsTo(Servicios::Class);
      
    }
}
