@extends('layouts.app')
@section('content')
<br>
<div class="container">
	<div class="col-md-12">
	<h1 style="font-family:algeria"> USUARIOS 
	<a href="{{route('usuarios.create')}}" class="btn btn-success">
	<img src="https://cdn-icons-png.flaticon.com/512/32/32360.png" width="20px"> Nuevo Usuario</a></h1>
	Estudiantes </a></h1>
	@if(!empty(Session::get('sms')))
	<h2 class="alert alert-success">{{Session::get('sms')}}</h2>
	@endif
	<table class="table table-striped table table-sm">
		<th style="text-align:center;">#</th>
		<th style="text-align:center;">Nombre</th>
		<th style="text-align:center;">Apellido</th>
		<th style="text-align:center;">Email</th>
		<th style="text-align:center;">Cédula</th>
		<th style="text-align:center;">Acciones</th>
		@foreach($usuarios as $u)
			<tr>
				<td style="text-align:center;">{{$loop->iteration}}</td>
				<td style="text-align:center;">{{$u->usu_nombre}}</td>
				<td style="text-align:center;">{{$u->usu_apellido}}</td>
				<td style="text-align:center;">{{$u->email}}</td>
				<td style="text-align:center;">{{$u->usu_cedula}}</td>
				<td>
					
				

				<div class="row">
	
 					
			                    
                    <form action="{{route('usuarios.destroy',$u->usu_id)}}" method="POST" onsubmit="return confirm('Desea eliminar')">
                    	@csrf
                     
                    	<button type="submit" class="btn btn-danger">Eliminar
                    	</button>
                    </form>
					</div>
					</td>
			</tr>
		@endforeach
	</table>
	</div>
</div>	
@endsection
