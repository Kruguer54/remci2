@extends('adminlte::page')

@section('content')
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<div class="container">

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">MARCA</th>
      <th scope="col">ACCIONES</th>
    </tr>
  </thead>
  
  <tbody>
  @foreach ($brands as $brand)
    <tr class="table-primary">
      
      <td>{{ $brand->id }}</td>
      <td>{{ $brand->namebrand }}</td>
      
      <td>
         <!-- Eliminar el registro seleccionado -->
      <form action="{{ route('brands_route.destroy', $brand->id) }}" method="POST">
        {{csrf_field()}}
        {{ method_field('DELETE') }}
    
      <!-- Editar la informacion dle registro seleccionado -->
      <a class="btn btn-secondary btn-sm" href="{{ route('brands_route.edit', $brand->id) }} ">Editar</a>
      
      <input class="btn btn-danger btn-sm" type="submit" onclick="return confirm('¿Desea borrar el registro?');" value="Eliminar">
      </form>
      </td>

    </tr>
    @endforeach
  </tbody>
  
</table> 

<a class="btn btn-success" href="{{ route('brands_route.create') }}">Nuevo</a>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


@endsection