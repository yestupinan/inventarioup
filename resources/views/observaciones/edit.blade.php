@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('Mensaje'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('Mensaje') }}
        </div>
    
    @endif
    <form action="{{ url('/observaciones/' . $observacion->id_ordenador) }}" method="post">
        {{ csrf_field() }}
        {{method_field('PATCH') }}
        <div class="form-group">
            <label for="id_observacion" class="control-label">{{ 'Id de la Observacion ' }}</label>
            <input type="text" class="form-control" name="id_observacion" id="id_observacion" value="{{$observacion->id_observacion }}" readonly>
        </div>
        <div class="form-group">
            <label for="id_ordenador" class="control-label">{{ 'Id de Ordenador' }}</label>
            <input type="text" class="form-control" name="id_ordenador" id="id_ordenador" value="{{$observacion->id_ordenador}}" readonly>
        </div>
        <div class="form-group">
            <label for="fecha" class="control-label">{{ 'Fecha' }}</label>
            <input type="date" class="form-control" name="fecha" id="fecha" value="{{$observacion->fecha }}">
        </div>
        <div class="form-group">
            <label for="observacion" class="control-label">{{ 'Observacion' }}</label>
            <input type="text" class="form-control" name="observacion" id="observacion" value="{{$observacion->observacion}}">
        </div>
        <br>
        <input class="btn btn-success" type="submit" value="Modificar">
        <a class="btn btn-primary" href="{{url('/caracteristicas').'/'.$observacion->id_ordenador.'/edit'}}">Regresar</a>
    </form>

</div>
@endsection