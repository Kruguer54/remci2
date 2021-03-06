@extends('adminlte::page')

@section('content')

<div class="container">

<div class="col">
    <!-- FORMULARIO PARA editar REGISTROS  -->
 <form action="{{ route('departments_route.update', $department->id) }}" method="post">
 
 {{ csrf_field()}}
{{ method_field('PATCH') }}

  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Nombre del departamento</label>
  <input type="text" class="form-control" name="namedepto" placeholder="Ingrese el nombre" value="{{ $department->namedepto }}">
  </div>
   
  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Ubicacion</label>
  <input type="text" class="form-control" name="location" placeholder="Ingrese la Ubicacion" value="{{ $department->location }}">
  </div>

    <br>
    <input type="reset" value="Restablecer" class="btn btn-secondary">
    <input type="submit" value="Actualizar" class="btn btn-primary">
    <a class="btn btn-danger" href="{{ route('departments_route.index') }}">Cancelar</a>
    </form>
</div>


<div class="col"></div>

</div>



</div>


@endsection