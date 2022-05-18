<?php

namespace App\Http\Controllers;
use App\Http\Requests\ServicioEditRequest;
use App\Models\Servicios;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiciosRequest;
use App\Http\Requests\UpdateServiciosRequest;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = Servicios::all();
        return view('Servicios.index', compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiciosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // dd($request);
        
        $this->validate($request,[
            'name' => 'required'
        ]);
        $servicio = new Servicios();
        
        $servicio->name          = request('name');
        $servicio->slug          = Str::slug($request->get('name'));
        $servicio->descripcion  = request('descripcion');
            if($request->hasFile('image')){
                $file = $request->image;
                $file->move(public_path(). '/img/servicios', $file->getClientOriginalName());
                $servicio->image = $file->getClientOriginalName();
    }
    // dd($categoria);
    // dd("se esta realizando el pregistro");
        $servicio->save();
       
        $messege = $servicio ? 'Servicio profesional agregada correctamente' : 'El servicio profesional no se agrego';
        return redirect()->route('Servicios.index')->with('messege', $messege);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function show(Servicios $servicio)
    {
        return $servicio;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $servicio = Servicios::findOrFail($id);
        return view('Servicios.edit' , ['servicio' => $servicio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiciosRequest  $request
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function update(ServicioEditRequest $request, $id)
    {
        $servicio = Servicios::findOrFail($id);
        $servicio->name = $request->get('name');
        $servicio->slug = Str::slug($request->get('name')); 
        $servicio->descripcion = $request->get('descripcion');

        $servicio->update();

        return redirect('/Servicios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Servicios::find($id)->delete();
        return back()->with('info', 'Se eliminó el servicio profesional');
    }
}
