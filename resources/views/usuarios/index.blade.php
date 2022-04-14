@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-md-12">
	<h1 style="font-family:algeria">Lista  de Usuarios 
	<a href="{{route('usuarios.create')}}" class="btn btn-success">
	<img src="" width="20px"> Nuevo Usuario</a></h1>
	<table class="table table-striped table table-sm">
		<th style="text-align:center;">#</th>
		<th style="text-align:center;">Nombre</th>
		<th style="text-align:center;">Apellido</th>
		<th style="text-align:center;">Email</th>
		<th style="text-align:center;">Cedula</th>
		@foreach($usuarios as $u)
			<tr>
				<td style="text-align:center;">{{$loop->iteration}}</td>
				<td style="text-align:center;">{{$u->usu_nombre}}</td>
				<td style="text-align:center;">{{$u->usu_apellido}}</td>
				<td style="text-align:center;">{{$u->email}}</td>
				<td style="text-align:center;">{{$u->usu_cedula}}</td>
			</tr>
		@endforeach
	</table>
	</div>
</div>	
@endsection
