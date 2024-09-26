@extends('layouts.app')

@section('content')
<div class="container">
    
    <form action="{{url('/salones/'.$salon->id_salon)}}" method="post">
        {{ csrf_field() }}
        {{method_field('PATCH')}}
        <div class="form-group">
            <label for="nombre" class="control-label">{{'Nombre del salon'}}</label>
            <input type="text" class="form-control" name="nombre" value="{{$salon->nombre}}">
        </div>
        <br>
        
        <input class="btn btn-success" type="submit" value="Modificar">
        <a href="{{url('salones')}}" class="btn btn-primary">  Regresar </a>
    </form>
            
</div>
@endsection