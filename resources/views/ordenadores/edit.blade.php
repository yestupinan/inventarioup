@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ url('/ordenadores/' . $ordenador->id_ordenador) }}" method="post">
        {{ csrf_field() }}
        {{method_field('PATCH') }}

        <div class="form-group">
            <label for="id_ordenador" class="control-label">{{ 'Id del Ordenador' }}</label>
            <input type="text" class="form-control" name="id_ordenador" id="id_ordenador" value="{{$ordenador->id_ordenador }}" readonly>
        </div>
        <div class="form-group">
            <label for="id_salon" class="control-label">{{ 'Id del Salon' }}</label>
            <input type="text" class="form-control" name="id_salon" id="id_salon" value="{{$ordenador->id_salon}}" readonly>
        </div>
        <div class="form-group">
            <label for="numero_en_salon" class="control-label">{{ 'Numero del PC en el Salon' }}</label>
            <input type="text" class="form-control" name="numero_en_salon" id="numero_en_salon" value="{{$ordenador->numero_en_salon }}">
        </div>
        <div class="form-group">
            <label for="mac" class="control-label">{{ 'MAC del PC' }}</label>
            <input type="text" class="form-control" name="mac" id="mac" value="{{$ordenador->mac}}">
        </div>
        <br>
        <input class="btn btn-success" type="submit" value="Modificar">
        <a href="{{url('/ordenadores').'/index'.'/'.$ordenador->id_salon}}" class="btn btn-primary">  Regresar </a>
    </form>
</div>
@endsection
