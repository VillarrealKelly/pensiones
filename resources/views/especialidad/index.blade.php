@extends('layouts.app')
@section('content')
<br>
<div class="container">
	<div class="col-md-12">
	<h1 style="font-family:algeria ">ESPECIALIDADES
	<a href="{{route('especialidad.create')}}	" class="btn btn-success">
	<img src="https://cdn-icons-png.flaticon.com/512/32/32360.png" width="20px"> Crear nueva especialidad </a></h1>
	Estudiantes </a></h1>
	@if(!empty(Session::get('sms')))
	<h2 class="alert alert-success">{{Session::get('sms')}}</h2>
	@endif
	<table class="table table-striped table table-sm">
		<th style="text-align:center;">#</th>
        <th style="text-align:center;">Especialidades</th>
        <th style="text-align:;">Acciones</th>

		@foreach($especialidad as $e)
			<tr>
				<td style="text-align:center;">{{$loop->iteration}}</td>
				<td style="text-align:center">{{$e->esp_detalle}}</td>
	
			 <td>

		<div class="row">
					<a href="{{route('especialidad.edit',$e->esp_id)}}" class="btn btn-info" title="Editar">Editar</a>
			                    
                    <form action="{{route('especialidad.destroy',$e->esp_id)}}" method="POST" onsubmit="return confirm('Desea eliminar')">
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
