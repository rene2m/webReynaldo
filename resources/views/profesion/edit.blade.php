@extends('layouts.app')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Profesiones</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Profesiones</a></li>
                    <li class="breadcrumb-item"><a href="#">Editar</a></li>
                    <li class="breadcrumb-item active">{{$profesion->name}}</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

{!! Form::open(['action' => ['ProfesionesController@update', $profesion->id],'method' => 'PATCH','files'=>'true']) !!}
{{ Form::token() }}

<div class="card text-center mx-auto" style="width: 550px;">
    <div class="card-header">
        <label for="name">Nombre</label>
        <input type="text" name="name" class="form-control"  value="{{ $profesion->name }}">
    </div> 
    <div class="card-header">
        <label for="extract">Sub titulo</label>
        <input type="text" name="extract" class="form-control" value="{{ $profesion->extract }}">
    </div>
    <div class="card-body">
        <textarea name="descriptions"  class="form-control"  rows="6" value="{{ $profesion->descriptions }}">
            {{ $profesion->descriptions }}
        </textarea>
    </div>
    <div class="card-header">
        <label for="price">Precio</label>
        <input type="number" step="any" name="price" class="form-control"  value="{{ $profesion->price }}">
    </div>
    <div class="form-group cold-md-6">
        <label for="image">Imagen</label><br>
            {{Form::file('image')}}
            @if($profesion->image != "")
                <img src="{{secure_asset('/img/profesiones/'.$profesion->image)}}" alt="{{$profesion->image}}" height="250px" width="50px" class="card-img-top">
            @endif
    </div>
    <div class="card-header">
        <label for="visible">Estatus:</label>
        <input type="checkbox" name="visible" {{ $profesion->visible == 1 ? "checked='checked'" : ''}}> 
    </div>
    <div class="card-footer text-muted small">
        {{ $profesion->updated_at }}
        <a href="{{URL::action('ProfesionesController@edit',$profesion->id)}}">
            <button type="submit" class="btn btn-info  ">
            <i class="far fa-save"></i>
            </button> 
        </a>
        <a href="{{URL::action('ProfesionesController@index')}}">
            <button type="button" class="btn btn-danger  float-right mr-1 ">
                <i class="far fa-window-close"></i>
            </button> 
        </a>
    </div>
</div>
{!! Form::close() !!}
@endsection