@extends('layouts.app')

@section('content')

<div class="container">
  <header class="header container-full black col-12 col-sm-12">
    <div class="col-8">
      <h3>Universidad de Costa Rica</h3>
    </div>
    <div class="col-4">
      <input class='input' type="text" placeholder="Search..">
    </div>
  </header>
  <body>
    <table class="table table-striped">
      <thead>
          <tr>
            <td>nombre</td>
            <td>Ver perfil</td>
            <td>sede</td>
            {{-- <td colspan="2">Editar Info</td> --}}
          </tr>
      </thead>
      <tbody>
          @foreach($tests as $test)
          <tr>
              <td>{{$test->crun_name}}</td>
              <td><a href="{{ route('tests.show',$test->crun_id)}}" class="btn btn-primary">HOMEBLADE-CRUNID SHOW PERFIL</a></td>
              <td>{{$test->sede}}</td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </body>
  
</div>

    

@endsection