@extends('layouts.app')

@section('content')

<div class="container-full">
    <header class="header black row col-12 col-sm-12">
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
                        <li class="nav-item active">
                                <h4 style="font-size:3vw;"> <a class="nav-link" href="/">Inicio</a> </h4>
                        </li>
                </div>
                <div class="nav_menuItem col-3">
                        <li class="nav-item">
                                <h4 style="font-size:3vw;"> <a class="nav-link" href="/list">Carreras</a> </h4>
                        </li>
                </div>
                <div class="nav_menuItem col-3">
                        <li class="nav-item">
                                <h4 style="font-size:3vw;"> <a class="nav-link" href="/">Sedes</a> </h4>
                        </li>
                </div>
                <div class="nav_menuItem col-2">
                        <li class="nav-item">
                                <h4 style="font-size:3vw;"> <a class="nav-link" href="/">MiCarreraU</a> </h4>
                        </li>
                </div>
            </ul>
        </div> 
    </header>
    <body>
        <div class="cruns-section row col-12">
            @forelse($tests as $test)     
            
                <div class="crun-container col-3">
                    <div class="crun-card text-center">
                            <h4 style="font-size:2vw;">Carrera: {{$test->crun_name}}</h4>
                            <a href="{{ route('listGuest', $test)}}"><h5 style="font-size:1vw;">Ver Carrera</a>
                    </div>
                </div>
            @empty
                <p>No hay nada</p>
        @endforelse
        </div>
    </body>
    
    <footer>
            <div class="container-full">
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
