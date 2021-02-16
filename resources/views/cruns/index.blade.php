@extends('layouts.app')

@section('content')

{{-- Admin section --}}
@auth
    <a href="{{ route('tests.create')}}" class="crun_create_btn btn btn-primary danger px-md-5">Añadir Carrera Universitaria CRUN</a>
@endauth
{{-- //End admin section --}}

<table class="table table-striped">
        <thead 
                  style="text-align: center;">
            <tr>
              <td><h4><strong>Carrera Universitaria</strong></h4></td>
              <td><h4><strong>Sede Universitaria</strong></h4></td>
              <td><h4><strong>Corte Anual</strong></h4></td>
              <td><h4><strong>Etiqueta</strong></h4></td>
              <td><h6 style="padding-top: 0.5vw;"><strong>Editar Información</strong></h6></td>
              <td><h6 style="padding-top: 0.5vw;"><strong>Acciones disponibles:</strong></h6></td>
              
            </tr>
        </thead>
        <tbody
                style="text-align: center;">
            @foreach($tests as $test)
            <tr>
                <td><a href="{{ route('listGuest',$test->id)}}" class="btn btn-success"><h5>{{$test->crun_name}}</h5></a></td></td>
                <td><h5>{{$test->crun_sede}}</h5></td>
                <td><h5>{{$test->crun_corte}}</h5></td>
                <td><h5>{{$test->crun_etiqueta}}</h5></td>
                <td><a href="{{ route('tests.edit',$test->id)}}" class="btn btn-primary">Editar</a></td>
                <td>
                    <form action="{{ route('tests.destroy', $test->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    

@endsection