@extends('adminlte::page')

@section('content')

<div class="container">

<div class="col">
    <!-- FORMULARIO PARA editar REGISTROS  -->
 <form action="{{ route('serviceOrders_route.update', $serviceOrder->id) }}" method="post">
 
 {{ csrf_field()}}
{{ method_field('PATCH') }}

  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Departamento</label>
  <input type="text" class="form-control" name="department_id" placeholder="Ingrese el departamento" value="{{ $serviceOrder->department_id }}">
  </div>
   
  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Equipo</label>
  <input type="text" class="form-control" name="equipment_id" placeholder="Ingrese el equipo" value="{{ $serviceOrder->equipment_id }}">
  </div>

  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Tecnico</label>
  <input type="text" class="form-control" name="technical_id" placeholder="Ingrese el tecnico" value="{{ $serviceOrder->technical_id }}">
  </div>

  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Fecha</label>
  <input type="date" class="form-control" name="date" placeholder="Ingrese la fecha" value="{{ $serviceOrder->date }}">
  </div>

  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Falla</label>
  <input type="text" class="form-control" name="failure" placeholder="Describe la falla" value="{{ $serviceOrder->failure }}">
  </div>

    <br>
    <input type="reset" value="Restablecer" class="btn btn-secondary">
    <input type="submit" value="Actualizar" class="btn btn-primary">
    <a class="btn btn-danger" href="{{ route('serviceOrders_route.index') }}">Cancelar</a>
    </form>
</div>


<div class="col"></div>

</div>



</div>


@endsection