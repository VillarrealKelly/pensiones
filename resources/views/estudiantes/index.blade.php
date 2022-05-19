@extends('layouts.app')
@section('content')
<br>
<div class="container">
	<div class="col-md-12">
	<h1 style="font-family:algeria ">ESTUDIANTES 
	<a href="{{route('estudiantes.create',$representantes->rep_id)}}" class="btn btn-success">
	<img src="https://cdn-icons-png.flaticon.com/512/32/32360.png" width="20px"> Nuevo Estudiantes </a></h1>
	<table class="table table-striped table table-sm">
		<th style="text-align:center;">#</th>
		<th style="text-align:center;">Nombre</th>
		<th style="text-align:center;">Apellido</th>
		<th style="text-align:center;">Cédula</th>
		<th style="text-align:center;">Curso</th>
		<th style="text-align:center;">Paralelo</th>
		<th style="text-align:center;">Especialidad</th>
		<th style="text-align:center;">Fecha</th>
		<th style="text-align:center;">Representante</th>
		<th style="text-align:center;">Acciones</th>
		@foreach($estudiantes as $e)
			<tr>
				<td style="text-align:center;">{{$loop->iteration}}</td>
				<td style="text-align:center;">{{$e->est_nombre}}</td>
				<td style="text-align:center;">{{$e->est_apellido}}</td>
				<td style="text-align:center;">{{$e->est_cedula}}</td>
				<td style="text-align:center;">{{$e->cur_detalle}}</td>
				<td style="text-align:center;">{{$e->esp_detalle}}</td>
				<td style="text-align:center;">{{$e->par_detalle}}</td>
				<td style="text-align:center">{{$e->est_fecha}}</td>
				<td style="text-align:center">{{$e->rep_cedula}}</td>
			 <td>

		<div class="row">

					<a href="{{route('estudiantes.edit',$e->est_id)}}" class="btn btn-info" title="Editar">Editar</a>
			                    
                    <form action="{{route('estudiantes.destroy',$e->est_id)}}" method="POST" onsubmit="return confirm('Desea eliminar')">
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
