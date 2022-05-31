@extends('layouts.app')
@section('content')
<?php
if(isset($desde)){
$desde=$desde;
$hasta=$hasta;
}else{

    $desde="";
    $hasta="";
}
if(isset($est_id)){
    $est_id=$est_id;
  
    }else{
    $est_id="";
       
    }
    if(isset($pen_id)){
        $pen_id=$pen_id;
      
        }else{
        $pen_id="";
           
        }

 ?>
<br>
<div class="container">
	<div class="col-md-12">
		<h1 style="font-family:algeria">REPORTE




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
				
		 <input type="date" class="form-control"  name="desde" value="{{$desde}}">
			</div>
			<div class="col-md-6">
				
		 <input type="date" class="form-control" name="hasta" value="{{$hasta}}">
			</div>
		</div>
	</div>
	 <div class="form-group col-md-3">
	 	<div class="row">
	 		
					<label for="">Estudiantes:</label>
	 	</div>
	 	<div class="row">
	 		
					<select class="  @error('est_id') is-invalid @enderror" name="est_id" value="{{ old('est_id') }}" autocomplete="est_id" autofocus  maxlength="10" id="estudiantes"  type="text" name="est_id"  >
						<option value="" selected disabled> Selecciona un Estudiante</option>
						@foreach($estudiantes as $est)
						@if($est->est_id==$est_id)
						<option selected value="{{$est->est_id}}">{{$est->est_cedula}} - {{$est->est_nombre}} {{$est->est_apellido}}</option>
						@else
						<option value="{{$est->est_id}}">{{$est->est_cedula}} - {{$est->est_nombre}} {{$est->est_apellido}}</option>

						@endif
			
						@endforeach


					</select>
					<script>
					$("#estudiantes").select2({
  					tags: true
					});
					</script>
	 	</div>
	 </div>
	 		 <div class="form-group col-md-2">
	 	 	<div class="row">
	 		
					<label for="">Estado:</label>
	 	</div>

	 		 	<div class="row">
	 		
					<select class="  @error('pen_id') is-invalid @enderror"  value="{{ old('pen_id') }}"  autocomplete="pen_id" autofocus  maxlength="10" id="pensiones"  type="text" name="pen_est"  >
						<option value="" selected disabled> Selecciona una opción</option>
						@foreach($pensiones as $p)
						@if($p->pen_estado==1)
						<?php
$estado="Cancelado"
						?>

@else
<?php
$estado="Pendiente"
						?>

@endif
						@if($p->pen_id==$pen_id )
						
						<option selected value="{{$p->pen_estado}}">{{$estado}}</option>
				
				
						@else
						
						<option value="{{$p->pen_estado}}">{{$estado}} </option>
						

						@endif
				    
						@endforeach
						


					</select>
					<script>
					$("#pensiones").select2({
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
	  					
		<button class="btn btn-success" type="submit"  value="btn_buscar" > Buscar</button>
			<button type="submit" class="btn btn-danger" value="0" name="btn_pdf" value="btn_pdf">PDF</button>
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
		
	
@isset($reporte)
		@foreach($reporte as $p )
 <tr>

     	<td style="text-align:center">{{$loop->iteration}}</td>
		<td style="text-align:center">{{$p->pen_cantidad}}</td>

		<td style="text-align:center">{{$p->pen_fecha}}</td>
		<td style="text-align:center">{{$p->pen_cant_paga}}</td>
		@if($p->pen_estado==1)
		<?php 
		$p->pen_estado="Cancelado";
		?>
		@else
		<?php
		$p->pen_estado="Pendiente";
		?>
		@endif
		<td style="text-align:center">{{$p->pen_estado}}</td>
		<td style="text-align:center">{{$p->usu_nombre}}</td>
		<td style="text-align:center">{{$p->est_nombre}}</td>





     </tr>
		@endforeach

@endisset
</table>		
					
 			
                    
	</div>
</div>	
@endsection
