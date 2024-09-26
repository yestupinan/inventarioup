@extends('layouts.app')

@section('content')
<div class="container">

    @if(Session::has('Mensaje'))

        <div class="alert alert-success" role="alert">
            {{ Session::get('Mensaje') }}
        </div>
        
    @endif

    <table class="table table-light table-hover">

        <a href="{{url('salones/create')}}" class="btn btn-success">  Agregar un nuevo salon  </a>
        <br>
        <br>
        <thead class="thead-light">
            <tr>

                <th>Id del Salon</th>
                <th>Nombre del Salon</th>
                <th>Accion</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($salones as $salon)

                <tr>

                    <td>{{$salon->id_salon}}</td>
                    <td>{{$salon->nombre}}</td>
                    <td>

                        <a class="btn btn-warning" href="{{url('/salones/'.$salon->id_salon.'/edit')}}">
                            Editar
                        </a>

                    <form method="post" action="{{url('/salones/'.$salon->id_salon)}}" style="display: inline">
                        {{csrf_field() }}
                        {{@method_field('DELETE')}}
                        <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
                    </form>

                    </td>
                </tr>

            @endforeach
        </tbody>

    </table>

    {{$salones->links('pagination::bootstrap-4')}}

</div>
@endsection
