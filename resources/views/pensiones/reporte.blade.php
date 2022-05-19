
<div class="container">
	<div class="col-md-12">
			   <center>
		<h1 style="text-align:center; font-family:algeria">
			   <img src="https://previews.123rf.com/images/lemonadeserenade/lemonadeserenade1604/lemonadeserenade160400132/55605301-pila-de-monedas-d%C3%B3lar-un-ejemplo-del-vector-dibujado-a-mano-de-una-pila-de-monedas-de-oro-con-el-sig.jpg" width="60" height="60" class="d-inline-block align-top" alt="">&nbsp;&nbsp;PENSIONES</h1>
			   <h3  >REPORTE </h3>	
			   	
			   </center>



		<table class="table table-striped table table-sm" border="1" align="center" cellspacing="1" cellpadding="4">
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

		@endforeach
     </tr>

</table>		
					
 			
                    
	</div>
</div>	

