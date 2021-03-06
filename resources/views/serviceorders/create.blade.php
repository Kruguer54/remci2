@extends('adminlte::page')

@section('content')

<div class="container">

<div class="row">
<div class="col"></div>
<div class="col">
    <!-- FORMULARIO PARA NUEVOS REGISTROS  -->
 <form action="{{ route('serviceOrders_route.store') }}" method="POST">
 @csrf <!-- Previene ataques dentro de la aplicacion -->
  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Departamento</label>
  <input type="text" class="form-control" placeholder="Ingrese el departamento" name="department_id">
  </div>

  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Equipo</label>
  <input type="text" class="form-control" placeholder="Seleccione equipo" name="equipment_id">
  </div>

  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Tecnico</label>
  <input type="text" class="form-control" placeholder="Tecnico" name="technical_id">
  </div>

  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Fecha</label>
  <input type="date" class="form-control" placeholder="Ingrese la fecha" name="date">
  </div>

  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Falla</label>
  <input type="text" class="form-control" placeholder="Describa la falla" name="failure">
  </div>
   

    <br>
    <input type="reset" value="Restablecer" class="btn btn-secondary">
    <input type="submit" value="Aceptar" class="btn btn-primary">
    <a class="btn btn-danger" href="{{ route('serviceOrders_route.index') }}">Cancelar</a>
    </form>
</div>


<div class="col"></div>

</div>



</div>


@endsection