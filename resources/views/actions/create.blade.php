@extends('adminlte::page')

@section('content')

<div class="container">

<div class="row">
<div class="col"></div>
<div class="col">
    <!-- FORMULARIO PARA NUEVOS REGISTROS de equipos  -->
 <form action="{{ route('actions_route.store') }}" method="POST">
 @csrf <!-- Previene ataques dentro de la aplicacion -->
  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Orden</label>
  <input type="text" class="form-control" placeholder="Ingrese No. Orden" name="serviceorder_id">
  </div>

  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Tecnico</label>
  <input type="text" class="form-control" placeholder="Tecnico" name="technical_id">
  </div>

  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Accion Realizada</label>
  <input type="text" class="form-control" placeholder="Describa la accion realizada" name="action_performed">
  </div>
   
  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Fecha y hora</label>
  <input type="datetime-local" class="form-control" placeholder="" name="date_time">
  </div>

 

    <br>
    <input type="reset" value="Restablecer" class="btn btn-secondary">
    <input type="submit" value="Aceptar" class="btn btn-primary">
    <a class="btn btn-danger" href="{{ route('actions_route.index') }}">Cancelar</a>
    </form>
</div>


<div class="col"></div>

</div>



</div>


@endsection