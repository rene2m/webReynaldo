@extends('layouts.app')
@section('content')
<div class="container ">
    <h1>
        Profesiones<small>[Agregar Profesion]</small>
    </h1>

<div class="row text-center">
    <div class="col-md-offset col-md-6">
        <div class="page">
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
        {!! Form::open(['route' => 'profesion.store','files'=>'true']) !!}
        {{Form::token()}} 
        <div class="form-group">
            <label  class="control-label" for="servicio_id">Servicio Profesionales</label>
            {!! Form::select('servicio_id', $servicios,null,['class' => 'form-control','placeholder' => 'Elija un servicio profesional'])!!}
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form-control" required placeholder="Ingrese un Nombre">
            </div>
            <div class="form-group col-md-6">
                <label for="extract">Sub titulo</label>
                <input type="text" name="extract" class="form-control" required placeholder="Ingrese su Sub titulo">
            </div>
        </div>
        <div class="form-group">
            <label for="descriptions">Descripción:</label>
            {{ Form::textarea('descriptions', null, array('class' =>'form-control input',  'required' => 'required', 'maxlength' => "400"))}}
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="price">Precio</label>
                <input type="number" step="any" name="price" class="form-control" required placeholder="Ingrese su Nombre">
            </div>
            <div class="form-group col-md-6">
                <label for="image">Imagen:</label>
                {{ Form::file('image',null,['required' => 'required'])}}
            </div>
        </div>
        <div class="form-group">
            <label for="visible">Estatus:</label>
            {!!
                Form::checkbox('visible',null,array('class' => 'form-check-label'))    !!}
        </div>

          <div class="form-group">
            {!! Form::submit('Guardar', array('class' =>'btn btn-outline-primary')) !!}
            <a href="{{ route('profesion.index')}}" class="btn btn-outline-primary">ATRAS</a>
            
        {!! Form::close()!!}   
        </div>
    </div>
</div>
@endsection