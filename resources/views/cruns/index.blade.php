@extends('layouts.app')

@section('content')

{{-- Admin section --}}
@auth
    <a href="{{ route('tests.create')}}" class="btn btn-primary danger px-md-5">Añadir Carrera Universitaria CRUN</a>
@endauth
{{-- //End admin section --}}

<table class="table table-striped">
        <thead>
            <tr>
              <td>Carrera Universitaria VISTAADMIN</td>
              <td>Perfil Universitario VISTAADMIN</td>
              <td>Sede Universitaria VISTAADMIN</td>
              <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($tests as $test)
            <tr>
                <td>{{$test->crun_name}}</td>
                <td><a href="{{ route('tests.show',$test->crun_id)}}" class="btn btn-primary">Perfil Universitario VISTAADMIN</a></td>
                <td>{{$test->crun_sede}}</td>
                <td><a href="{{ route('tests.edit',$test->crun_id)}}" class="btn btn-primary">Edicion VISTAADMIN</a></td>
                <td>
                    <form action="{{ route('tests.destroy', $test->crun_id)}}" method="post">
                      @csrf
                      @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    

@endsection