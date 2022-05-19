@extends('layouts.app')
@section('content')
<br>
<div class="container">
	<div class="col-md-12">
		<h1 style="font-family:algeria">PENSIONES
		<a href="{{route('pensiones.create')}}" class="btn btn-success">
		<img src="https://cdn-icons-png.flaticon.com/512/32/32360.png" width="20px">Nueva Pensión</a>

		</h1>
		<br>
		<form action="{{route('pensiones.search')}}" method="POST">
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
	 <div class="form-group col-md-5">
	 	<div class="row">
	 		
					<label for="">Estudiantes:</label>
	 	</div>
	 	<div class="row">
	 		
					<select class="  @error('est_id') is-invalid @enderror" name="est_id" value="{{ old('est_id') }}" required autocomplete="est_id" autofocus  maxlength="10" id="estudiantes"  type="text" name="est_id"  >
						<option value="" selected disabled> Selecciona un Estudiante</option>
				    		@foreach($estudiantes as $est)
						@if($est->est_id==$est_id)
						<option selected value="{{$est->est_id}}">{{$est->est_cedula}} - {{$est->est_nombre}} {{$est->est_apellido}}</option>
						@else
						<option value="{{$est->est_id}}">{{$est->est_cedula}} - {{$est->est_nombre}} {{$est->est_apellido}}</option>

						@endif
				    	<!-- <option selected disabled  value="">Seleccione una opción</option> -->
						@endforeach

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
