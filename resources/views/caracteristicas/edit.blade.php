@extends('layouts.app')

@section('content')
<div class="container">    
    @if(Session::has('Mensaje'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('Mensaje') }}
        </div>
    
    @endif

    <form action="{{ url('/caracteristicas/' . $caracteristica->id_ordenador) }}" method="post">
        {{ csrf_field() }}
        {{method_field('PATCH') }}

        <div class="form-group">
            <label for="id_caracteristica" class="control-label">{{ 'Id de la Caracteristica ' }}</label>
            <input type="text" class="form-control" name="id_caracteristica" id="id_caracteristica" value="{{$caracteristica->id_caracteristica }}" readonly>
        </div>
        <div class="form-group">
            <label for="id_ordenador" class="control-label">{{ 'Id de Ordenador' }}</label>
            <input type="text" class="form-control" name="id_ordenador" id="id_ordenador" value="{{$caracteristica->id_ordenador}}" readonly>
        </div>
        <div class="form-group">
            <label for="office" class="control-label">{{ 'office' }}</label>
            <input type="text" class="form-control" name="office" id="office" value="{{$caracteristica->office }}">
        </div>
        <div class="form-group">
            <label for="SO" class="control-label">{{ 'SO del PC' }}</label>
            <input type="text" class="form-control" name="SO" id="SO" value="{{$caracteristica->so}}">
        </div>
        <div class="form-group">
            <label for="serial_cpu" class="control-label">{{ 'Serial del PC' }}</label>
            <input type="text" class="form-control" name="serial_cpu" id="serial_cpu" value="{{$caracteristica->serial_cpu}}">
        </div>
        <div class="form-group">
            <label for="serial_monitor" class="control-label">{{ 'Serial del Monitor' }}</label>
            <input type="text" class="form-control" name="serial_monitor" id="serial_monitor" value="{{$caracteristica->serial_monitor}}">
        </div>
        <div class="form-group">
            <label for="serial_teclado" class="control-label">{{ 'Serial del Teclado' }}</label>
            <input type="text" class="form-control" name="serial_teclado" id="serial_teclado" value="{{$caracteristica->serial_teclado}}">
        </div>
        <div class="form-group">
            <label for="serial_mouse" class="control-label">{{ 'Serial del Mouse' }}</label>
            <input type="text" class="form-control" name="serial_mouse" id="serial_mouse" value="{{$caracteristica->serial_mouse}}">
        </div>
        <div class="form-group">
            <label for="serial_disco_duro_mecanico" class="control-label">{{ 'Serial del Disco Duro' }}</label>
            <input type="text" class="form-control" name="serial_disco_duro_mecanico" id="serial_disco_duro_mecanico" value="{{$caracteristica->serial_disco_duro_mecanico}}">
        </div>
        <div class="form-group">
            <label for="serial_disco_solido" class="control-label">{{ 'Serial del Disco Solido' }}</label>
            <input type="text" class="form-control" name="serial_disco_solido" id="serial_disco_solido" value="{{$caracteristica->serial_disco_solido}}">
        </div>
        <div class="form-group">
            <label for="camara_web" class="control-label">{{ 'Camara Web' }}</label>
            <input type="text" class="form-control" name="camara_web" id="camara_web" value="{{$caracteristica->camara_web}}">
        </div>
        <div class="form-group">
            <label for="estabilizadores" class="control-label">{{ 'Estabilizadores' }}</label>
            <input type="text" class="form-control" name="estabilizadores" id="estabilizadores" value="{{$caracteristica->estabilizadores}}">
        </div>
        <div class="form-group">
            <label for="cpu" class="control-label">{{ 'CPU' }}</label>
            <input type="text" class="form-control" name="cpu" id="cpu" value="{{$caracteristica->cpu}}">
        </div>
        <div class="form-group">
            <label for="ram" class="control-label">{{ 'RAM' }}</label>
            <input type="text" class="form-control" name="ram" id="ram" value="{{$caracteristica->ram}}">
        </div>

        <input class="btn btn-success" type="submit" value="Modificar">
    </form>

</div>
@endsection