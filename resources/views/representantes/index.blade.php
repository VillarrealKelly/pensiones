@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-md-12">
	<h1 style="font-family:algeria">REPRESENTANTES 
	<a href="{{route('representantes.create')}}" class="btn btn-success">
	<img src="https://cdn-icons-png.flaticon.com/512/32/32360.png" width="20px"> Nuevo Representante</a></h1>
	<table class="table table-striped table table-sm">
		<th style="text-align:center;">#</th>
		<th style="text-align:center;">Nombre</th>
		<th style="text-align:center;">Apellido</th>
		<th style="text-align:center;">Cedula</th>
		<th style="text-align:center;">Fecha</th>
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
