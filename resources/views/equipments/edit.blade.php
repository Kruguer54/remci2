@extends('adminlte::page')

@section('content')

<div class="container">

<div class="col">
    <!-- FORMULARIO PARA NUEVOS REGISTROS  -->
 <form action="{{ route('equipments_route.update', $equipment->id) }}" method="post">
 
 {{ csrf_field()}}
{{ method_field('PATCH') }}

   
  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Departamento</label>
  <input type="text" class="form-control" name="department_id" placeholder="Ingrese el id del depto" value="{{ $equipment->department_id }}">
  </div>


  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Marca</label>
  <input type="text" class="form-control" name="brand_id" placeholder="Ingrese el id de la marca" value="{{ $equipment->brand_id }}">
  </div>

  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Modelo</label>
  <input type="text" class="form-control" name="model" placeholder="Ingrese el modelo" value="{{ $equipment->model }}">
  </div>

  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Serie</label>
  <input type="text" class="form-control" name="serial_number" placeholder="Ingrese la serie" value="{{ $equipment->serial_number }}">
  </div>

  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Tipo</label>
  <select name="type">
  <option value="pc"{{ $equipment->type }}>Cómputo</option> 
  <option value="impr"{{ $equipment->type }}>Impresion</option>
</select>
  </div>

  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Estado fisico</label>
  <input type="text" class="form-control" name="physical_state" placeholder="Estado fisico" value="{{ $equipment->physical_state }}">
  </div>
   

    <br>
    <input type="reset" value="Restablecer" class="btn btn-secondary">
    <input type="submit" value="Actualizar" class="btn btn-primary">
    <a class="btn btn-danger" href="{{ route('equipments_route.index') }}">Cancelar</a>
    </form>
</div>


<div class="col"></div>

</div>
</div>


@endsection