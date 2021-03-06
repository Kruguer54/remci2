@extends('adminlte::page')

@section('content')



<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <h1>HISTORIAL</h1>
    <!-- Content Header (Page header) -->
    {{-- <section class="content-header">
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section> --}}

    <!-- Main content -->
    <section class="content-fuid">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Historial</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Depto</th>
                    <th scope="col">Equipo</th>
                    <th scope="col">Tecnico</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Falla</th>
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($serviceOrders as $serviceOrder)
                <tr>
                  <td>{{ $serviceOrder->id }}</td>
                  <td>{{ $serviceOrder->namedepto }}</td>
                  <td>{{ $serviceOrder->model }} serie: {{ $serviceOrder->serial_number }}</td>
                  <td>{{ $serviceOrder->name }} {{ $serviceOrder->a_pater }}</td>
                  <td>{{ $serviceOrder->date }}</td>
                  <td>{{ $serviceOrder->failure }}</td>
                  <td>
         <!-- Eliminar el registro seleccionado -->
      <form action="{{ route('serviceOrders_route.destroy', $serviceOrder->id) }}" method="POST">
        {{csrf_field()}}
        {{ method_field('DELETE') }}
    
      <!-- Editar la informacion dle registro seleccionado -->
      <a class="btn btn-secondary btn-sm" href="{{ route('serviceOrders_route.edit', $serviceOrder->id) }} ">Editar</a>
      
      <input class="btn btn-danger btn-sm" type="submit" onclick="return confirm('¿Desea borrar el registro?');" value="Eliminar">
      </form>
      </td>
                </tr>
                @endforeach
                  
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->








<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


@endsection