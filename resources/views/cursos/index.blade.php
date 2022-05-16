@extends('layouts.app')
@section('content')
<br>
<div class="container">
	<div class="col-md-12">
	<h1 style="font-family:algeria ">CURSOS
	<a href="{{route('cursos.create')}}	" class="btn btn-success">
	<img src="https://cdn-icons-png.flaticon.com/512/32/32360.png" width="20px"> Crear nuevo curso </a></h1>
	<table class="table table-striped table table-sm">
		<th style="text-align:center;">#</th>
        <th style="text-align:center;">Curso</th>
        <th style="text-align:;">Acciones</th>

		@foreach($cursos as $c)
			<tr>
				<td style="text-align:center;">{{$loop->iteration}}</td>
				<td style="text-align:center">{{$c->cur_detalle}}</td>
	
			 <td>

		<div class="row">
					<a href="{{route('cursos.edit',$c->cur_id)}}" class="btn btn-info" title="Editar">Editar</a>
			                    
                    <form action="{{route('cursos.destroy',$c->cur_id)}}" method="POST" onsubmit="return confirm('Desea eliminar')">
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
