<form action={{ $action}} method="POST" enctype="multipart/form-data">

  @csrf
  {{ $method }}

  <div class="form-group">
    <label for="name">@lang('Name')</label><br>
      <input class="form-control" type="text" name="name " id="name" value="{{ $crun['name']}}" placeholder="Name">
  </div>

  <div class="form-group">
    <label for="Sede Regional">@lang('Sede')</label><br>
      <select class="form-control" name="sede" id="sede">
        <option value="SedeE">Sede 1</option>
        <option value="SedeP">Sede 2</option>
      </select>
  </div>

{{--
  <div class="form-group">
    <label for="name">@lang('Corte')</label><br>
      <input class="form-control" type="text" name="corte" id="corte" value="{{ $crun['corte']}}" placeholder="Corte Anual">
  </div> --}}
</form>
