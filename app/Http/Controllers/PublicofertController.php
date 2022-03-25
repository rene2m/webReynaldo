<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use App\Models\Proveedores;
use Illuminate\Http\Request;
use App\Models\publicofert;
class PublicofertController extends Controller
{ 
    public function index(){
        //return view('clientes.todas.index', ['clientes' => Clientes::all()->where('user_id',auth()->id())]);
        return view('ofertas.todas.index',['ofertas' => Publicofert::all()]);
    }
    public function ofertas(){
        $ofertas = publicofert::all();
        // dd($ofertas);
        $productos = Productos::all();
        $proveedores = Proveedores::all();
    
        return view('index', compact('ofertas' , 'productos','proveedores'));
                    
    }
    public function store(Request $request)
    {
        $oferta = new Publicofert();
            
        $oferta->user_id = auth()->id();
        $oferta->titulo = request('titulo');
        $oferta->texto = request('texto');
            if($request->hasFile('image')){
                $file = $request->image;
                $file->move(public_path(). '/img/ofertas', $file->getClientOriginalName());
                $oferta->image = $file->getClientOriginalName();
    }
        $oferta->save();
        return redirect('ofertas/todas');
    }
    public function edit($id)
    {
        return view('ofertas.todas.edit',['oferta' => Publicofert::findOrFail($id)]);
    }
    public function update(Request $request,$id)
    {
        $oferta = Publicofert::findOrFail($id);
        $oferta->titulo = request('titulo'); 
        $oferta->texto = request('texto');
        if($request->hasFile('image')){
            $file = $request->image;
            $file->move(public_path(). '/img/ofertas', $file->getClientOriginalName());
            $oferta->image = $file->getClientOriginalName();
    }
        $oferta->update(); 
        return redirect('ofertas/todas');
    }

    public function destroy($id)
    {
        $oferta = Publicofert::findOrFail($id);
        unlink(public_path('img/ofertas/'.$oferta->image));
        $oferta->delete();
        return redirect('ofertas/todas');
    }
}
