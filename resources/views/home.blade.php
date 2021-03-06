@extends('adminlte::page')

@section('plugins.Sweetalert2', true)

@section('title', 'Dashboard')

@section('content_header')
    <h1> Registro de Mantenimiento para computadoras e impresoras</h1>
<br>
    
		<style>
			.card {
				background-color: #B2E7E3;
			}
			.fas fa-tools {
				align-content: flex-end;
			}
			/*.card-header {
				background-color: #B2E7E3;
			}*/
		</style>


    <div class="col-12">
    	<div class="row">
    		<div class="col-5">
    		<div class="card">
  			<div class="card-header">
    			<strong><h3>Reportar una falla <i class="fas fa-tools" ></i></h3></strong>
  			</div>
  			<div class="card-body">
    			<h5 class="card-title"><strong>Crear nueva orden de servicio</strong></h5>
    			<br>
    			<a href="{{ route('createclient_route') }}" class="btn btn-primary">Nueva solicitud</a>
  			</div>
			</div>
			</div>

			<div class="col-5">
    		<div class="card">
  			<div class="card-header">
    			<strong><h3>Panel de Técnicos <i class="fas fa-toolbox" ></i></h3></strong>
  			</div>
  			<div class="card-body">
    			<h5 class="card-title"><strong>Ordenes de servicio asignadas</strong></h5>
    			<br>
    			<a href="{{ route('paneltec_route') }}" class="btn btn-primary">Consultar</a>
  			</div>
			</div>

			</div>

    	</div>

    		<div class="row">
    		<div class="col-5">
    		<div class="card">
  			<div class="card-header">
    			<strong><h3>Ordenes pendientes <i class="fas fa-exclamation-triangle"></i></h3></strong>
  			</div>
  			<div class="card-body">
    			<h5 class="card-title"><strong>Consultar órdenes pendientes </strong></h5>
    		
    			<br>
    			<a href="{{ route('orderpend_route') }}" class="btn btn-primary">Consultar</a>
  			</div>
			</div>
			</div>

			<div class="col-5">
    		<div class="card">
  			<div class="card-header">
    			<strong><h3>Historial Técnico <i class="fas fa-history"></i></h3></strong>
  			</div>
  			<div class="card-body">
    			<h5 class="card-title"><strong>Consultar historial técnico de los equipos </strong></h5>
    			
    			<br>
    			<a href="{{ route('history_route') }}" class="btn btn-primary">Consultar</a>
  			</div>
			</div>

			</div>

    	</div>

    	
    </div>
@stop

@section('content')
    <p> </p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- <script> Swal.fire(
  'Bienvenido',
  'Registro de Mantenimiento para Computadoras e Impresoras',
  'success'
) </script> --}}
@stop
