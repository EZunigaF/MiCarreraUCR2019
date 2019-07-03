<form  method="POST" action="{{$action}}" enctype="multipart/form-data">

  @csrf
  {{ $method }}

  <div class="form-group">
      <label for="">@lang('Name')</label><br>
      <input class="form-control" type="text" name="crun_name" id="name" value="{{ $test['crun_name']}}" placeholder="Carrera Universitaria:">
  </div>
  
  <div class="form-group">
    <label for="">@lang('Sede')</label><br>
      <select class="form-control" name="crun_sede" id="sede">
        <option value="sedeEsparza">Sede Universitaria UCR Esparza</option>
        <option value="sedePuntarenas">Sede Universitaria UCR Puntarenas</option>
      </select>
  </div>

  <div class="form-group">
    <label for="">@lang('Corte')</label><br>
      <input class="form-control" type="text" name="crum_corte" id="corte" value="{{ $test['crun_corte']}}" placeholder="Corte anual:">
  </div>

  <div class="form-group">
    <label for="">@lang('Sede')</label><br>
      <select class="form-control" name="crun_etiqueta" id="etiqueta">
        <option value="etiqueta1">Ingenieria</option>
        <option value="etiqueta2">Administracion </option>
      </select>

  <button class="btn btn-primary submit_crun" type="submit" style="margin-top: 3vw;">
      {{ $button_text }}
  </button>
</form>
