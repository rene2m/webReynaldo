<?php

namespace App\Http\Controllers;
use App\Http\Requests\CategoriaEditRequest;

use App\Models\Categorias;
use Illuminate\Http\Request;
use App\Http\Requests\SaveCategoriaRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class CategoriasController extends Controller
{
    public function index(){

        $categorias = Categorias::all();
        return view('Categorias.index', compact('categorias'));
        
        
    }

    public function create(){

        return view('Categorias.create');

    }

    public function store(Request $request){


        // dd($request);
        
        $this->validate($request,[
            'name' => 'required|unique:categorias|max:255'
        ]);
        $categoria = new Categorias();
        
        $categoria->name          = request('name');
        $categoria->slug          = Str::slug($request->get('name'));
        $categoria->descripcion  = request('descripcion');
            if($request->hasFile('image')){
                $file = $request->image;
                $file->move(public_path(). '/img/categorias', $file->getClientOriginalName());
                $categoria->image = $file->getClientOriginalName();
    }
    // dd($categoria);
        $categoria->save();
       
        $messege = $categoria ? 'Categoria agregada correctamente' : 'la cetegoria no se agrego';
        return redirect()->route('Categorias.index')->with('messege', $messege);
    }

    public function show(Categorias $categoria){

        return $categoria;
    }

    public function edit($id){

        $categoria = Categorias::findOrFail($id);
        return view('Categorias.edit' , ['categoria' => $categoria]);
    }

    public function update(CategoriaEditRequest $request, $id){

        $categoria = Categorias::findOrFail($id);
        $categoria->name = $request->get('name');
        $categoria->slug = Str::slug($request->get('name')); 
        $categoria->descripcion = $request->get('descripcion');

        $categoria->update();

        return redirect('/Categorias');
    }

    public function destroy($id){
        
        Categorias::find($id)->delete();
        return back()->with('info', 'Se eliminó la categoría');
        }
}
