@extends('layouts.app')
@section('content')
        <header>
                <thead>
                    <tr>
                      <td>nombre</td>
                      <td>Ver perfil</td>
                      <td>sede</td>
                      {{-- <td colspan="2">Editar Info</td> --}}
                    </tr>
                </thead>
        </header>
        <body>
            <main>
                    <p>Informacion de carrera CRUN VISTA SHOW </p>

                    <label for="">@lang('Carrera Univesitaria')</label>
                    <p>{{ $test->crun_name }}</p>
                    <td>{{$test->crun_name}} text</td>
            
                    <label for="">@lang('Sede Univesitaria')</label>
                    <p>{{ $test->crun_sede }}</p>
            </main>
        </body>
        

        

        {{-- Admin section --}}
        @auth
        <td><a href="{{ route('tests.index')}}" class="btn btn-primary">AdminMenu</a></td>
        @endauth
        {{-- //End admin section --}}

        {{-- Perfil Invitado section --}}
        @guest
        {{-- Perfil Invitado, para editar consulte con el administrador.    --}}
        <br><a href="{{ route('list')}}" class="btn btn-primary">Volver al INICIO</a>
        @endguest
        {{-- //End Perfil Invitado section --}}


     

@endsection