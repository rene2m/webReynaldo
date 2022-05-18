<?php

namespace App\Http\Controllers;

use App\Models\Profesiones;
use App\Models\Servicios;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProfesionesRequest;
use App\Http\Requests\SaveProfesionRequest;
use App\Http\Requests\UpdateProfesionesRequest;
use Illuminate\Support\Str;
class ProfesionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $query = trim($request->get('search'));
            $profesiones = Profesiones::where('name','LIKE','%'. $query.'%')
            ->orderBy('id','asc')
            ->simplePaginate(5);
            return view('profesion.index',['profesiones' => $profesiones , 'search' => $query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicios = Servicios::orderBy('id' , 'desc')->pluck('name', 'id');
        // dd($profesiones);
        return view('profesion.create', compact('servicios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfesionesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProfesionRequest $request)
    {
        // dd("testeando aceso");
        $profesion = new Profesiones();
            
        $profesion->servicio_id  = $request->get('servicio_id');
        $profesion->name          = request('name');
        $profesion->slug          = Str::slug($request->get('name'));
        $profesion->descriptions  = request('descriptions');
        $profesion->extract       = request('extract');
        $profesion->price         = request('price');
            if($request->hasFile('image')){
                $file = $request->image;
                $file->move(public_path(). '/img/profesiones', $file->getClientOriginalName());
                $profesion->image = $file->getClientOriginalName();
        $profesion->visible       = request('visible') ? 1 : 0;
    }
        $profesion->save();
        return redirect('profesion/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profesiones  $profesiones
     * @return \Illuminate\Http\Response
     */
    public function show(Profesiones $profesiones)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profesiones  $profesiones
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        return view('profesion.edit',['profesion' => Profesiones::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfesionesRequest  $request
     * @param  \App\Models\Profesiones  $profesiones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $profesion = Profesiones::findOrFail($id);
        // dd($profesion);
        $profesion->servicio_id  = $profesion->servicio_id;
        $profesion->name          = $request->get('name');
        $profesion->slug          = Str::slug($request->get('name'));
        $profesion->descriptions  = $request->get('descriptions');
        $profesion->extract       = $request->get('extract');
        $profesion->price         = $request->get('price');
            if($request->hasFile('image')){
                $file = $request->image;
                $file->move(public_path(). '/img/productos', $file->getClientOriginalName());
                $profesion->image = $file->getClientOriginalName();
            }
        $profesion->visible       = $request->get('visible') ? 1 : 0;
        $profesion->update(); 
        return redirect('profesion/');
    }
    public function destroy($id){
        $profesion = Profesiones::find($id);
        unlink(public_path('img/profesiones/'.$profesion->image));
        $profesion->delete();
        return redirect('profesion/');
    }
    }

