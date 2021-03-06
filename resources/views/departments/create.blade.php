@extends('adminlte::page')

@section('content')
<br><br><br><br>
<div class="container">

<div class="row">
<div class="col"></div>
<div class="col">
    <!-- FORMULARIO PARA NUEVOS REGISTROS  -->
 <form action="{{ route('departments_route.store') }}" method="POST">
 @csrf <!-- Previene ataques dentro de la aplicacion -->
  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Nombre del departamento</label>
  <input type="text" class="form-control" placeholder="Ingrese el nombre" name="namedepto">
  </div>

  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Ubicacion</label>
  <input type="text" class="form-control" placeholder="Ingrese la Ubicacion" name="location">
  </div>
   

    <br>
    <input type="reset" value="Restablecer" class="btn btn-secondary">
    <input type="submit" value="Aceptar" class="btn btn-primary">
    <a class="btn btn-danger" href="{{ route('departments_route.index') }}">Cancelar</a>
    </form>
</div>


<div class="col"></div>

</div>



</div>


@endsection