@extends('layouts.app')

@section('content')
<div class="container">   
    @if(Session::has('Mensaje'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('Mensaje') }}
        </div>
    
    @endif

    <table class="table table-light table-hover">

        <thead class="thead-light">
            <tr>

                <th>Id del Ordenador</th>
                <th>Id del Salon</th>
                <th>Numero del PC en el salon</th>
                <th>Mac del PC</th>
                <th>Accion</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($ordenadores as $ordenador)

                <tr>

                    <td>{{$ordenador->id_ordenador}}</td>
                    <td>{{$ordenador->id_salon}}</td>
                    <td>{{$ordenador->numero_en_salon}}</td>
                    <td>{{$ordenador->mac}}</td>

                    <td>

                        <a class="btn btn-success" href="{{ url('/ordenadores/' . $ordenador->id_ordenador . '/edit') }}">
                            Editar
                        </a>


                    <form method="post" action="{{url('/ordenadores/'.'index/'.$ordenador->id_ordenador)}}" style="display: inline">
                        {{csrf_field() }}
                        {{@method_field('DELETE')}}
                        <input type="hidden" name="id_salon" value="{{ $ordenador->id_salon}}">
                        <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
                    </form>

                    </td>
                </tr>

            @endforeach
        </tbody>

    </table>
    <a href="{{ url('/ordenadores/create/' .$id_salon) }}" class="btn btn-success">Agregar</a> 
    <a href="{{url('salones')}}" class="btn btn-primary">  Regresar </a>
    <br>
    <br>

    {{$ordenadores->links('pagination::bootstrap-4')}}
</div>
@endsection