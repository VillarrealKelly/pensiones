@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-md-12">
	<h1 style="font-family:algeria">ESTUDIANTES 
	<a href="{{route('estudiantes.create')}}" class="btn btn-success">
	<img src="" width="20px"> Nuevo Estudiantes </a></h1>
	<table class="table table-striped table table-sm">
		<th style="text-align:center;">#</th>
		<th style="text-align:center;">Nombre</th>
		<th style="text-align:center;">Apellido</th>
		<th style="text-align:center;">Cedula</th>
		<th style="text-align:center;">Curso</th>
		<th style="text-align:center;">Paralelo</th>
		<th style="text-align:center;">Especialidad</th>
		<th style="text-align:center;">Fecha</th>
		<th style="text-align:center;">Representante</th>
		@foreach($estudiantes as $e)
			<tr>
				<td style="text-align:center;">{{$loop->iteration}}</td>
				<td style="text-align:center;">{{$e->est_nombre}}</td>
				<td style="text-align:center;">{{$e->est_apellido}}</td>
				<td style="text-align:center;">{{$e->est_cedula}}</td>
				<td style="text-align:center">{{$e->est_curso}}</td>
				<td style="text-align:center">{{$e->est_paralelo}}</td>
				<td style="text-align:center">{{$e->est_especialidad}}</td>
				<td style="text-align:center">{{$e->est_fecha}}</td>
				<td style="text-align:center">{{$e->rep_cedula}}</td>
			 <td>

		<div class="row">
					<a href="{{route('estudiantes.edit',$e->est_id)}}" class="btn btn-info  btn-sm" title="Editar" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
  
 					<path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
					</svg></a>
			                    
                    <form action="{{route('estudiantes.destroy',$e->est_id)}}" method="POST" onsubmit="return confirm('Desea eliminar')">
                    	@csrf
                     
                    	<button type="submit" class="btn btn-danger">
                    		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
								<path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
							</svg>
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
