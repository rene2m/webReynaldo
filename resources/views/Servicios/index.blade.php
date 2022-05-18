@extends('layouts.app')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Servicios Profesionales</a></li>
                    <li class="breadcrumb-item active">Index</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<div class="container mt-5">
    <h2>LISTA DE SERVICIOS PROFESIONALES
    <a href="{{ route('Servicios.create')}}" class="btn btn-outline-info">
            <i class="fa fa-plus-circle"> Agregar Servicios</i>
        </a>
    </h2>
    <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
                <th scope="col">Nombre</th>
                <th scope="col">Imagen</th>
                <th scope="col">Descripción</th>
            </tr>
        </thead>
            <tbody>
                @foreach($servicios as $servicio)
                <tr>
                    <td>
                        <a href="{{route('Servicios.edit',$servicio->id)}}" class="btn btn-outline-success">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                    <td>
                        {!! Form::open(['action' => ['ServiciosController@destroy', $servicio->id],'method' => 'DELETE']) !!}
                        {{ Form::token() }}
                            <button class="btn btn-outline-danger" onclick="return confirm('Eliminar Registro?')">
                                <i class="fas fa-eraser"></i>
                            </button>
                        {!! Form::close() !!}
                    </td>
                    <td>{{$servicio->name}}</td>
                    <td>
                        <img class="rounded-circle" src="{{secure_asset('/img/servicios/'.$servicio->image)}}" alt="{{$servicio->image}}" width="100" height="100">
                    </td>
                    <td>{{$servicio->descripcion}}</td>
                </tr>
                @endforeach
            </tbody>
    </table> 
</div>  
</div><br><br>
<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Hola {{ Auth::user()->name }}</h4>
    <h4>Si vas a Eliminar un <strong>"Servicio Profesional "</strong>tener en cuenta estas recomendaciones:<br>
        1-Al momento de eliminar un Servicio Profesional se va a realizar la eliminación de "</strong>.todas las profesiones que poseen ese servicio profesional"</strong>.<br>
        2-Es Mejor actualizar y cambiar los datos que eliminar un servicio profesinal. <br>
        3-No Elimine una categoría a no se por motivos mayores.
    </h4>
    <hr>
    <p class="mb-0">Que tengas un hermoso dia Atte: REYHOGAR</p>
</div>
@endsection