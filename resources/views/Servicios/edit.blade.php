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
                    <li class="breadcrumb-item">Servicios Profesionales</li>
                    <li class="breadcrumb-item">Index</li>
                    <li class="breadcrumb-item active"><a href="#">Editar</a></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<div class="container ">
    <div class="row">
        <div class="col-sm-6">
        <h3>Vas a editar el Servicio Profesional: {{$servicio->name}}</h3>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
            <form action="{{route('Servicios.update', $servicio->id)}}" method="POST"  autocomplete="off">
                @method('PATCH')
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>NOMBRE</label>
                        <input type="text" name="name" class="form-control" value="{{ $servicio->name }}">
                    </div><br>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>DESCRIPCIÓN</label>
                        <textarea name="descripcion" id="" class="form-control" rows="6">{{ $servicio->descripcion }}</textarea>
                        
                    </div>
                </div>
                <div class="row"> 
                    <div class="form-group col-md-5">
                        <button type="submit" class="btn btn-outline-primary"><i class="far fa-save"></i></button>
                        <button type="reset" class="btn btn-outline-danger">
                            <a href="{{ route('Servicios.index')}}"><i class="fas fa-fast-backward"></i></a>
                        </button>
                    </div>
                </div>
            </form>
</div>
@endsection