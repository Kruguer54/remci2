@extends('adminlte::page')

@section('content')

<div class="container">

<div class="row">
<div class="col"></div>
<div class="col">
    <!-- FORMULARIO PARA NUEVOS REGISTROS de equipos  -->
 <form action="{{ route('equipments_route.store') }}" method="POST">
 @csrf <!-- Previene ataques dentro de la aplicacion -->
  <div class="form-group" id="departments">
  <label class="col-form-label" for="inputDefault">Departamento</label>
  {{-- <select name="department_id">
  <option value="pc">Cómputo</option> 
  <option value="impr" selected>Impresion</option>
</select> --}}
        <select name="department_id">
        
        <?php
          include 'http://localhost/remci2/resources/views/equipments0conexion.php';

          $consulta="SELECT * FROM departments";
          $ejecutar= mysqli_query($conexion,$consulta) or die(mysqli_error($conexion)); ?>

          

          <?php foreach ($ejecutar as $opciones): ?>

            <option value="<?php echo $opciones['namedepto'] ?>"> <?php echo $opciones['namedepto'] ?></option>

          <?php endforeach ?>
          

        </select>
  {{-- <input type="text" class="form-control" placeholder="Ingrese el Departamento" name="department_id"> --}}
  </div>

  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Marca</label>
  <input type="text" class="form-control" placeholder="Ingrese la marca" name="brand_id">
  </div>

  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Modelo</label>
  <input type="text" class="form-control" placeholder="Ingrese el modelo" name="model">
  </div>
   
  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Serie</label>
  <input type="text" class="form-control" placeholder="Ingrese la serie" name="serial_number">
  </div>

  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Tipo</label>
  <select name="type">
  <option value="pc">Cómputo</option> 
  <option value="impr" selected>Impresion</option>
</select>
  </div>

  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Estado fisico</label>
  <input type="text" class="form-control" placeholder="Ingrese el estado fisico" name="physical_state">
  </div>

    <br>
    <input type="reset" value="Restablecer" class="btn btn-secondary">
    <input type="submit" value="Aceptar" class="btn btn-primary">
    <a class="btn btn-danger" href="{{ route('equipments_route.index') }}">Cancelar</a>
    </form>
</div>


<div class="col"></div>

</div>



</div>


@endsection