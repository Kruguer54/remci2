@extends('adminlte::page')

@section('content')
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<div class="container">

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">E-MAIL</th>
      <th scope="col">PASSWORD</th>
    </tr>
  </thead>
  
  <tbody>
  @foreach ($users as $user)
    <tr class="table-primary">
      
      <td>{{ $user->id }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->password }}</td>
      
      <td>
         <button type="button" class="btn btn-primary">Editar</button>
          <button type="button" class="btn btn-danger">Borrar</button>
      </td>

    </tr>
    @endforeach
  </tbody>
  
</table> 

<a class="btn btn-success" href="{{ route('register') }}">Nuevo</a>

@guest
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        

                                    
                                </div>
                            </li>
                        @endguest
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


@endsection