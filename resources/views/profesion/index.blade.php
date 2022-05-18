@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <h2>LISTA DE PROFESIONES
    <form class="form-inline ml-3 float-right">
        <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" name="search" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
                <button class="input-group-text" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
    <a href="{{ route('profesion.create')}}" class="btn btn-outline-info float-right">
        <i class="fa fa-plus-circle"> Profesiones</i>
    </a>
    </h2>
    
        @if($search)
            <div class="alert alert-success" role="alert">
                El resultado de la busqueda de <strong>'{{$search}}'</strong> son:.
            </div>
        @endif
    </h6>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
                <th scope="col">Imagen</th>
                <th scope="col">Nombre</th>
                <th scope="col">Categoría</th>
                <th scope="col">Sub titulo</th>
                <th scope="col">Descripción</th>
                <th scope="col">Precio</th>
                <th scope="col">Estatus</th>
            </tr>
        </thead>
            <tbody>
                @foreach($profesiones as $profesion)
                <tr>
                    <td>
                        <a href="{{URL::action('ProfesionesController@edit',$profesion->id)}}">
                            <button type="button" class="btn btn-outline-info">
                                <i class="far fa-edit"></i>
                            </button> 
                        </a> 
                    </td>
                    <td>
                        {!! Form::open(['action' => ['ProfesionesController@destroy', $profesion->id],'method' => 'DELETE']) !!}
                        {{ Form::token() }}
                            <button class="btn btn-outline-danger" onclick="return confirm('Estas Seguro de Eliminar Esta Profesion?')">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        {!! Form::close() !!}
                    </td>
                    <td>
                        <img class="rounded-circle" src="{{secure_asset('/img/profesiones/'.$profesion->image)}}" alt="{{$profesion->image}}" width="100" height="100">
                    </td>
                    <td>{{$profesion->name}}</td>
                    <td>{{$profesion->servicio->name}}</td>
                    <td>{{$profesion->extract}}</td>
                    <td>{{$profesion->descriptions}}</td>
                    <td>{{ number_format( $profesion->price,2)}}</td>
                    <td>{{$profesion->visible == 1 ? "En Stock":"Agotado"}}</td>
                </tr>
                @endforeach
            </tbody>
    </table>
    </div>  
    {{$profesiones->links()}}
</div><br><br>

@endsection