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
    
    <form action="{{url('/ordenadores/index').'/'.$id_salon}}" class="form-horizontal" method="post">
     {{ csrf_field() }}
        <div class="form-group">

            <label for="id_salon" class="control-label">{{'Id del salon'}}</label>
            <input type="text" class="form-control" name="id_salon" value={{$id_salon}} readonly>

            <label for="numero_en_salon" class="control-label">{{'Numero del PC en el salon'}}</label>
            <input type="text" class="form-control" name="numero_en_salon" value="{{old('numero_en_salon')}}">

            <label for="mac" class="control-label">{{'MAC'}}</label>
            <input type="text" class="form-control" name="mac" value="{{old('mac')}}">
        </div>
        <br>
        <input class="btn btn-success" type="submit" value="Siguiente">
        <a href="{{url('/ordenadores/index').'/'.$id_salon}}" class="btn btn-primary">  Regresar </a>
    </form>
    
</div>
@endsection