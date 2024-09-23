@extends('layouts.app')

@section('content')
<div class="container">
    
    @if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <form action="{{url('/salones')}}" class="form-horizontal" method="post">
     {{ csrf_field() }}
        <div class="form-group">
        <label for="nombre" class="control-label">{{'Nombre del salon'}}</label>
        <input type="text" class="form-control" name="nombre" value="">
        </div>
        <br>
        <input class="btn btn-success" type="submit" value="Agregar">
     <a href="{{url('salones')}}" class="btn btn-primary">  Regresar </a>
    </form>
    
</div>
@endsection