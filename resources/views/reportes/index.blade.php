@extends('layouts.app')
@section('content')
<br>
<div class="container">
	<div class="col-md-12">
		<h1 style="font-family:algeria">REPORTE
	<?php 
if (isset($pensiones)){
	$est_id=$pensiones->est_id;
	$est_nombre=$pensiones->est_nombre;
	$est_apellido=$pensiones->est_apellido;
	$est_cedula=$pensiones->est_cedula;
	$est_fecha=$pensiones->est_fecha;



}else{
	$est_id="";
	$est_nombre="";
	$est_apellido="";
	$est_cedula="";
	$est_fecha="";

}

	?>

		</h1>
		<br>
		<form action="{{route('reportes.search')}}" method="POST">
		@csrf
<div class="row">
	<div class="col-md-5">
		<div class="row">
			<div class="col-md-6">
				
		Desde:
			</div>
			<div class="col-md-6">
				
		Hasta:
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				
		 <input type="date" class="form-control"  name="desde" value="">
			</div>
			<div class="col-md-6">
				
		 <input type="date" class="form-control" name="hasta" value="">
			</div>
		</div>
	</div>
	 <div class="form-group col-md-5">
	 	<div class="row">
	 		
					<label for="">Estudiantes:</label>
	 	</div>
	 	<div class="row">
	 		
					<select class="  @error('est_id') is-invalid @enderror" name="est_id" value="{{ old('est_id') }}" required autocomplete="est_id" autofocus  maxlength="10" id="estudiantes"  type="text" name="est_id"  >
						<option value="" selected disabled> Selecciona un Estudiante</option>


					</select>
					<script>
					$("#estudiantes").select2({
  					tags: true
					});
					</script>
	 	</div>

	  			</div>
	  			<div class="col-md-2">
	  				<div class="row">
	  					Acciones:
	  				</div>
	  				<div class="row">
	  					
		<button class="btn btn-success" name="btn_buscar" value="btn_buscar" > Buscar</button>
			<button class="btn btn-danger" name="btn_pdf" value="btn_pdf">PDF</button>
	  				</div>
		</div>

			</div>	
			<br>		
		</form>



		<table class="table table-striped table table-sm">
		<th style="text-align:center;">#</th>
		<th style="text-align:center;">Cantidad</th>
		<th style="text-align:center;">fecha</th>
		<th style="text-align:center;">Cantidad Pagada</th>
		<th style="text-align:center;">Estado</th>
		<th style="text-align:center;">Usuario</th>
		<th style="text-align:center;">Estudiante</th>
		
	

		@foreach($pensiones as $p )
 <tr>





     </tr>
		@endforeach

</table>		
					
 			
                    
	</div>
</div>	
@endsection
