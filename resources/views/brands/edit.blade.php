@extends('adminlte::page')

@section('content')

<div class="container">

<div class="col">
    <!-- FORMULARIO PARA NUEVOS REGISTROS  -->
 <form action="{{ route('brands_route.update', $brand->id) }}" method="post">
 
 {{ csrf_field()}}
{{ method_field('PATCH') }}

  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Nombre de la marca</label>
  <input type="text" class="form-control" name="namebrand" placeholder="Ingrese el nombre" value="{{ $brand->namebrand }}">
  </div>
   

    <br>
    <input type="reset" value="Restablecer" class="btn btn-secondary">
    <input type="submit" value="Actualizar" class="btn btn-primary">
    <a class="btn btn-danger" href="{{ route('brands_route.index') }}">Cancelar</a>
    </form>
</div>


<div class="col"></div>

</div>



</div>


@endsection