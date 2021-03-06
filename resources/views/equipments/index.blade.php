@extends('adminlte::page')

@section('content')
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<div class="container">

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">DEPTO</th>
      <th scope="col">MARCA</th>
      <th scope="col">MODELO</th>
      <th scope="col">SERIE</th>
      <th scope="col">TIPO</th>
      <th scope="col">ESTADO FISICO</th>
      <th scope="col">ACCIONES</th>
    </tr>
  </thead>
  
  <tbody>
  @foreach ($equipments as $equipment)
    <tr class="table-primary">
      
      <td>{{ $equipment->id }}</td>
      <td>{{ $equipment->namedepto }}</td>
      <td>{{ $equipment->namebrand }}</td>
      <td>{{ $equipment->model }}</td>
      <td>{{ $equipment->serial_number }}</td>
      <td>{{ $equipment->type }}</td>
      <td>{{ $equipment->physical_state }}</td>
      <td>
      <form action="{{ route('equipments_route.destroy', $equipment->id) }}" method="POST">
        {{csrf_field()}}
        {{ method_field('DELETE') }}
    
      <!-- Editar la informacion dle registro seleccionado -->
      <a class="btn btn-secondary btn-sm" href="{{ route('equipments_route.edit', $equipment->id) }} ">Editar</a>
      
      <input class="btn btn-danger btn-sm" type="submit" onclick="return confirm('¿Desea borrar el registro?');" value="Eliminar">
      </form>
      </td>

      </td>
    </tr>
    @endforeach
  </tbody>
  
</table> 

<a class="btn btn-success" href="{{ route('equipments_route.create') }}">Nuevo</a>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


@endsection