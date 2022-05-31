@extends('layouts.app')
@section('content')
<br>
<div class="container">
	<div class="col-md-12">
	<h1 style="font-family:algeria">REPRESENTANTES 
	<a href="{{route('representantes.create')}}" class="btn btn-success">
	<img src="https://cdn-icons-png.flaticon.com/512/32/32360.png" width="20px"> Nuevo Representante</a></h1>
	@if(!empty(Session::get('sms')))
	<h2 class="alert alert-success">{{Session::get('sms')}}</h2>
	@endif
	<table class="table table-striped table table-sm">
		<th style="text-align:center;">#</th>
		<th style="text-align:center;">Nombre</th>
		<th style="text-align:center;">Apellido</th>
		<th style="text-align:center;">Cédula</th>
		<th style="text-align:center;">Fecha</th>
		<th style="text-align:center;">Acciones</th>
		@foreach($representantes as $r)
			<tr>
				<td style="text-align:center;">{{$loop->iteration}}</td>
				<td style="text-align:center;">{{$r->rep_nombre}}</td>
				<td style="text-align:center;">{{$r->rep_apellido}}</td>
				<td style="text-align:center;">{{$r->rep_cedula}}</td>
				<td style="text-align:center">{{$r->rep_fecha}}</td>
			 <td>

		<div class="row">
			 	<a class="btn btn-dark" href="{{route('estudiantes',$r->rep_id)}}">Estudiantes</a>
					<a href="{{route('representantes.edit',$r->rep_id)}}" class="btn btn-info  " title="Editar" >Editar</a>
			                    
                    <form action="{{route('representantes.destroy',$r->rep_id)}}" method="POST" onsubmit="return confirm('Desea eliminar')">
                    	@csrf
                     
                    	<button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
					</div>
					</td>
			</tr>
		@endforeach
	</table>
	</div>
</div>	
@endsection
