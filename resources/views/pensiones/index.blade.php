@extends('layouts.app')
@section('content')
<br>
<div class="container">
	<div class="col-md-12">
		<h1 style="font-family:algeria">PENSIONES
		<a href="{{route('pensiones.create')}}" class="btn btn-success">
		<img src="https://cdn-icons-png.flaticon.com/512/32/32360.png" width="20px">Nueva Pensión</a>
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
		<th style="text-align:center;">Acciones</th>
	

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
					<a href="{{route('pensiones.edit',$p->pen_id)}}" class="btn btn-info" title="Editar" >Editar</a>
			                    
                    <form action="{{route('pensiones.destroy',$p->pen_id)}}" method="POST" onsubmit="return confirm('Desea eliminar')">
                    	@csrf
                     
                    	<button type="submit" class="btn btn-danger">
                    		Eliminar
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
