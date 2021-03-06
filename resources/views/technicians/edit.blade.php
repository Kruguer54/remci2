@extends('adminlte::page')

@section('content')

<div class="container">

<div class="col">
    <!-- FORMULARIO PARA editar REGISTROS  -->
 <form action="{{ route('technicals_route.update', $technical->id) }}" method="post">
 
 {{ csrf_field()}}
{{ method_field('PATCH') }}

  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Nombre</label>
  <input type="text" class="form-control" name="name" placeholder="Ingrese el nombre" value="{{ $technical->name }}">
  </div>

  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Apellido Paterno</label>
  <input type="text" class="form-control" name="a_pater" placeholder="Ingrese apellido paterno" value="{{ $technical->a_pater }}">
  </div>

  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Nombre de la marca</label>
  <input type="text" class="form-control" name="a_mater" placeholder="Ingrese el apellido materno" value="{{ $technical->a_mater }}">
  </div>
   

    <br>
    <input type="reset" value="Restablecer" class="btn btn-secondary">
    <input type="submit" value="Actualizar" class="btn btn-primary">
    <a class="btn btn-danger" href="{{ route('technicals_route.index') }}">Cancelar</a>
    </form>
</div>


<div class="col"></div>

</div>



</div>


@endsection