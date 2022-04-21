@extends('layouts.app')
@section('content')

<div class="container">
	<div class="col-md-12">
		<h1 style="font-family:algeria">CONTROL
		<a href="{{route('pensiones.create')}}" class="btn btn-success">
		<img src="https://cdn-icons-png.flaticon.com/512/32/32360.png" width="20px"> Nueva Pensión</a>
		</h1>
		<form action="{{route('pensiones.search')}}" method="POST">
		@csrf
		Desde: <input type="date" name="desde" value="{{$desde}}">
		Hasta: <input type="date" name="hasta" value="{{$hasta}}">
		<button class="btn btn-success" name="btn_buscar" value="btn_buscar" > Buscar</button>
			<button class="btn btn-danger" name="btn_pdf" value="btn_pdf">PDF</button>			
		</form>



		<table class="table table-striped table table-sm">
		<th style="text-align:center;">#</th>
		<th style="text-align:center;">Cantidad</th>
		<th style="text-align:center;">fecha</th>
		<th style="text-align:center;">Cantidad Pagada</th>
		<th style="text-align:center;">Estado</th>
		<th style="text-align:center;">Usuario</th>
		<th style="text-align:center;">Estudiante</th>
	

		@foreach($pensiones as $p)
 <tr>
     	<td style="text-align:center">{{$loop->iteration}}</td>
		<td style="text-align:center">{{$p->pen_cantidad}}</td>

		<td style="text-align:center">{{$p->pen_fecha}}</td>
		<td style="text-align:center">{{$p->pen_cant_paga}}</td>
		<td style="text-align:center">{{$p->pen_estado}}</td>
		<td style="text-align:center">{{$p->usu_nombre}}</td>
		<td style="text-align:center">{{$p->est_nombre}}</td>


     <td>
					<div class="row">
					<a href="{{route('pensiones.edit',$p->pen_id)}}" class="btn btn-info  btn-sm" title="Editar" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
  
 					<path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
					</svg></a>
			                    
                    <form action="{{route('pensiones.destroy',$p->pen_id)}}" method="POST" onsubmit="return confirm('Desea eliminar')">
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
