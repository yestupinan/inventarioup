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
    
    <form action="{{route('observaciones.store', ['id_salon' => $id_salon])}}" class="form-horizontal" method="post">
     {{ csrf_field() }}
        <div class="form-group">

            <label for="id_ordenador" class="control-label">{{'Id del ordenador'}}</label>
            <input type="text" class="form-control" name="id_ordenador" value={{$id_ordenador}} readonly>

            <label for="fecha" class="control-label">{{'Fecha'}}</label>
            <input type="date" class="form-control" name="fecha" value="{{old('fecha')}}">

            <label for="observacion" class="control-label">{{'Observacion'}}</label>
            <input type="text" class="form-control" name="observacion" value="{{old('observacion')}}">

        </div>
        <br>
        <input class="btn btn-success" type="submit" value="Siguiente">
        
    </form>
    
</div>
@endsection