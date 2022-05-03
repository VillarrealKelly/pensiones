

<div class="container">
	<div class="col-md-12">
		<h1 style="font-family:algeria">PENSIONES
		</h1>
	



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
		<!-- <td style="text-align:center">{{$p->pen_cantidad}}</td> -->

		<td style="text-align:center">{{$p->pen_fecha}}</td>
		<td style="text-align:center">{{$p->pen_cant_paga}}</td>
		<td style="text-align:center">{{$p->pen_estado}}</td>
	<!-- 	<td style="text-align:center">{{$p->usu_nombre}}</td>
		<td style="text-align:center">{{$p->est_nombre}}</td> -->



     </tr>
		@endforeach

</table>		
					
 			
                    
	</div>
</div>	

