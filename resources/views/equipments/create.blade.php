@extends('adminlte::page')

@section('content')
@inject ('departments', 'App\Services\Departments')


<div class="container">

<div class="row">

<div class="col">
    <!-- FORMULARIO PARA NUEVOS REGISTROS de equipos  -->
 <form action="{{ route('equipments_route.store') }}" method="POST">
 @csrf <!-- Previene ataques dentro de la aplicacion -->
    <div class="form-group">
    <label  for="department" class="col-form-label">Departamento</label>
      
      <div class="col-md-6">
      <select id="department" name="department_id" class="form-control{{ $errors->has('department_id') ? ' is-invalid' : '' }}">

        @foreach($departments->get() as $index => $department)
              <option value="{{ $index }}" {{ old('department_id') == $index ? 'selected' : '' }}>{{ $department }}
              </option>
        @endforeach  
      </select>


          @if ($errors->has('department_id'))
              <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('department_id') }}</strong>
              </span>
          @endif

         {{--  {{ $departments }} --}}
    </div>
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