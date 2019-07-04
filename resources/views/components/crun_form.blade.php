<form style="margin:3.5vw;" method="POST" action="{{$action}}" enctype="multipart/form-data">

  @csrf
  {{ $method }}

<div class="container-full">

  <div class="form-group row">
      <label class="text-success" for=""><h3 style="font-size:1.5vw;">@lang('Nombre Carrera Universitaria')</h3></label>
      <input class="form-control" type="text" name="crun_name" id="name" value="{{ $test['crun_name']}}" placeholder="Carrera Universitaria">
  </div>
  
  <div class="form-group row">
    <label class="text-success" for=""><h3 style="font-size:1.5vw;">@lang('Sede Universitaria')</h3></label><br>
      <select class="form-control" name="crun_sede" id="sede">
        <option value="UCR Esparza">Sede Universitaria UCR Esparza</option>
        <option value="UCR Puntarenas">Sede Universitaria UCR Puntarenas</option>
      </select>
  </div>

  <div class="form-group row">
    <label class="text-success" for=""><h3 style="font-size:1.5vw;">@lang('Corte anual de carrera')</label><br>
      <input class="form-control" type="text" name="crun_corte" id="corte" value="{{ $test['crun_corte']}}" placeholder="Corte anual">
  </div>

  <div class="form-group row">
    <label class="text-success" for=""><h3 style="font-size:1.5vw;">@lang('Escuela de Carrera')</label><br>
      <select class="form-control" name="crun_etiqueta" id="etiqueta">
        <option value="Ingenierías"><strong>Ingeniería</strong></option>
        <option value="Administraciónes"><strong>Administracion</strong></option>
        <option value="Direcciónes"><strong>Dirección</strong></option>
        <option value="Gestiones"><strong>Gestion</strong></option>
      </select>

  <button class="btn btn-primary submit_crun" type="submit" style="margin-top: 3vw;">
      {{ $button_text }}
  </button>

</div>
</form>
