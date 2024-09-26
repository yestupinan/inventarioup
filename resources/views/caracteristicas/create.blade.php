@extends('layouts.app')

@section('content')
<div class="container">

    @if(Session::has('Mensaje'))

        <div class="alert alert-success" role="alert">
            {{ Session::get('Mensaje') }}
        </div>
        
    @endif
    
    @if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <form action="{{route('caracteristicas.store', ['id_salon' => $id_salon])}}" class="form-horizontal" method="post">
     {{ csrf_field() }}
        <div class="form-group">

            <label for="id_ordenador" class="control-label">{{'Id del ordenador'}}</label>
            <input type="text" class="form-control" name="id_ordenador" value={{$id_ordenador}} readonly>

            <label for="office" class="control-label">{{'Paquete de Office'}}</label>
            <input type="text" class="form-control" name="office" value="{{old('office')}}">

            <label for="so" class="control-label">{{'Sistema Operativo'}}</label>
            <input type="text" class="form-control" name="so" value="{{old('so')}}">

            <label for="serial_cpu" class="control-label">{{'Serial del CPU'}}</label>
            <input type="text" class="form-control" name="serial_cpu" value="{{old('serial_cpu')}}">

            <label for="serial_monitor" class="control-label">{{'Serial del Monitor'}}</label>
            <input type="text" class="form-control" name="serial_monitor" value="{{old('serial_monitor')}}">

            <label for="serial_teclado" class="control-label">{{'Serial del Teclado'}}</label>
            <input type="text" class="form-control" name="serial_teclado" value="{{old('serial_teclado')}}">
            
            <label for="serial_mouse" class="control-label">{{'Serial del Mouse'}}</label>
            <input type="text" class="form-control" name="serial_mouse" value="{{old('serial_mouse')}}">

            <label for="serial_disco_duro_mecanico" class="control-label">{{'Serial del Disco Duro Mecanico'}}</label>
            <input type="text" class="form-control" name="serial_disco_duro_mecanico" value="{{old('serial_disco_duro_mecanico')}}">

            <label for="serial_disco_solido" class="control-label">{{'Serial del Disco Solido'}}</label>
            <input type="text" class="form-control" name="serial_disco_solido" value="{{old('serial_disco_solido')}}">

            <label for="camara_web" class="control-label">{{'Serial de la Camara'}}</label>
            <input type="text" class="form-control" name="camara_web" value="{{old('camara_web')}}">
            
            <label for="estabilizadores" class="control-label">{{'Estabilizadores'}}</label>
            <input type="text" class="form-control" name="estabilizadores" value="{{old('estabilizadores')}}">

            <label for="cpu" class="control-label">{{'CPU'}}</label>
            <input type="text" class="form-control" name="cpu" value="{{old('cpu')}}">

            <label for="ram" class="control-label">{{'RAM'}}</label>
            <input type="text" class="form-control" name="ram" value="{{old('ram')}}">

        </div>
        <br>
        <input class="btn btn-success" type="submit" value="Siguiente">
        
    </form>
    
</div>
@endsection