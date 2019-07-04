@extends('layouts.app')
@section('content')

<header class="header container-full black row col-12 col-sm-12">
        <div class="university_title col-7">
          <h3 style="font-size:4vw;">Universidad de Costa Rica</h3>
        </div>
  
        <div class="col-4" style="margin-top: 1vw;">
              <div class="input-group">
                <div class="input-group-prepend ">
                  <span class="input-group-text" id="basic-addon1" style="padding-top: 4%; margin-top: 1px;">
                          <i class="material-icons">search</i>
                  </span>
                          </div>
                  <input type="text" class="form-control" placeholder="Búsqueda">
           </div>
        </div>
          <div class="row title_container col-12">
              <ul class="nav">
                  <div class="nav_menuItem col-3">
                          <li class="nav-item">
                                  <h4 style="font-size:2.5vw;"> <a class="nav-link active" href="/home">Inicio</a> </h4>
                          </li>
                  </div>
                  <div class="nav_menuItem col-3">
                          <li class="nav-item">
                                  <h4 style="font-size:2.5vw;"> <a class="nav-link active" href="/list">Carreras</a> </h4>
                          </li>
                  </div>
                  <div class="nav_menuItem col-3">
                          <li class="nav-item">
                                  <h4 style="font-size:2.5vw;"> <a class="nav-link active" href="/">Sedes</a> </h4>
                          </li>
                  </div>
                  <div class="nav_menuItem col-2">
                          <li class="nav-item">
                                  <h4 style="font-size:2.5vw;"> <a class="nav-link active" href="/">MiCarreraU</a> </h4>
                          </li>
                  </div>
              </ul>
          </div> 
      </header>
        <header>
                  {{-- <thead 
                        style="text-align: center;">
                  <tr>
                    <td><h4><strong>Carrera Universitaria</strong></h4></td>
                    <td><h4><strong>Sede Universitaria</strong></h4></td>
                    <td><h4><strong>Corte Anual</strong></h4></td>
                    <td><h4><strong>Etiqueta</strong></h4></td>
                    <td><h6 style="padding-top: 0.5vw;"><strong>Editar Información</strong></h6></td>
                    <td><h6 style="padding-top: 0.5vw;"><strong>Acciones disponibles:</strong></h6></td>
                    
                  </tr>
              </thead> --}}
                <thead>
                    <tr>
                      {{-- <td><h4><strong>Carrera Universitaria</strong></h4></td> --}}
                      {{-- <td>Ver perfil</td> --}}
                      {{-- <td>sede</td> --}}
                    </tr>
                </thead>
        </header>
        <body>
            <main>
                    <div class="showCruns row col-12">
                            <div class="col-6">
                                <div class="alert alert-dismissible alert-primary col-6">
                                        <td><h4><strong>Carrera Universitaria:</strong></h4></td>
                                        <td><h5>{{$test->crun_name}}</h5></td>
                                </div>
                                <div class="alert alert-dismissible alert-secondary col-6">
                                        <td><h4><strong>Sede Universitaria</strong></h4></td>
                                        <td><h5>{{$test->crun_sede}}</h5></td>
                                </div>
                                <div class="alert alert-dismissible alert-secondary col-6">
                                        <td><h4><strong>Corte Anual</strong></h4></td>
                                        <td><h5>{{$test->crun_corte}}</h5></td>
                                </div>
                                <div class="alert alert-dismissible alert-secondary col-6">
                                        <td><h4><strong>Etiqueta</strong></h4></td>
                                        <td><h5>{{$test->crun_etiqueta}}</h5></td>
                                </div>
                            </div>
                                <div class="showCruns col-5">
                                        
                                        {{-- Admin section --}}
                                        @auth
                                                <td><a href="{{ route('tests.index')}}" class="showCrunsbtn btn btn-primary"><h5>Administrar Crun</h5></a></td>
                                                <td><a href="{{ route('tests.edit',$test->id)}}" class="showCrunsbtn btn btn-danger"><h5>Editar Información</h5></a></td>
                                        @endauth
                                        {{-- //End Perfil Admin section --}}

                                        {{-- Perfil Invitado section --}}
                                        {{-- Perfil Invitado, para editar consulte con el administrador.    --}}
                                        <br><a href="{{ route('list')}}" class="showCrunsbtn btn btn-success"><h5>Volver a Inicio</h5></a>
                                        {{-- //End Perfil Invitado section --}}
                                </div>
                            </div>
                    </div>
            </main>
        </body>
        <footer>
                        <div class="">
                                <div class="footer-crun row col-12">
                                        <div class="footer-proyecto col-4">
                                                <h4 style="font-size:2vw;">Proyecto Programado</h4>
                                                <h5 style="font-size:1vw;">Desarrollo de Aplicaciones Interactivas II</h5>
                                                <h5 style="font-size:1vw;"><strong>MiCarreraU</strong></h5>
                                        </div>
                                        <div class="footer-micarrerau col-4">
                                            <h3 style="font-size:2.5vw;">Mi Carrera Universitaria </h3>
                                            <h5 style="font-size:1vw;">Este proyecto propone el servicio de una página web, que contenga la informacion escencial sobre las carreras universitarias de la Universidad De Costa Rica</h5>
                                        </div>
                                        <div class="footer-about col-3">
                                            <h4 style="font-size:2vw;">About Us</h4>
                                            <h5 style="font-size:1vw;">Esteban José Zúñiga Fallas</h5>
                                            <h5 style="font-size:1vw;">B78598</h5>
                                        </div>
                                </div>
                        </div>
                </footer>
@endsection