<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profesiones;
use App\Models\Servicios;

class StoreServiciosController extends Controller
{
    public function index(){

        // dd("accediendo al controlador");
        $servicios = Servicios::all();
        $profesiones = Profesiones::all();
                
        return view('servicios', compact('servicios' , 'profesiones'));
        
    }

    public function show($slug){
        
        $profesiones = Profesiones::where('slug', $slug)->first();
        //corregir esta parte debe pertenecer a  una vista llamada profecion detalle
        return view('profesiones-details', compact('profesiones'));

        
    }
    public function searchServicio($slug){
        // dd("no se puede acceder a este registro");
        $servicios = Servicios::where('slug' , $slug)->pluck('id')->all();
         $profesiones = Profesiones::where('servicio_id', $servicios)
                    ->orderBY('id', 'DESC')
                    ->simplePaginate(6);
                   
                    // foreach($profesiones as $profesion)
                    // dd( $profesion->servicio);
        return view('profesiones', compact('servicios' , 'profesiones')); 
    }
}
