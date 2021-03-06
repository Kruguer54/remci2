@extends('adminlte::page')

@section('content')
<br><br><br><br>
<div class="container">

<div class="row">
<div class="col"></div>
<div class="col">
    <!-- FORMULARIO PARA NUEVOS REGISTROS  -->
 <form action="{{ route('brands_route.store') }}" method="POST">
 @csrf <!-- Previene ataques dentro de la aplicacion -->
  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Nombre de la marca</label>
  <input type="text" class="form-control" placeholder="Ingrese el nombre" name="namebrand">
  </div>
   

    <br>
    <input type="reset" value="Restablecer" class="btn btn-secondary">
    <input type="submit" value="Aceptar" class="btn btn-primary">
    <a class="btn btn-danger" href="{{ route('brands_route.index') }}">Cancelar</a>
    </form>
</div>


<div class="col"></div>

</div>



</div>


@endsection