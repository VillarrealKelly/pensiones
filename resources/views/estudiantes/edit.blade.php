@extends('layouts.app')
@section('content')
<br>
<br>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
<!-- <div class="container col-md-4" >
	<div class="col-md-12" style="margin-top: 2%;"> -->
		<h3 style="font-family:algeria;text-align: center;"><img src="" width="40px"> Registro de Estudiantes</h3>
	</div>
	<div class="card-body">
		 <form action="{{route('estudiantes.update',$estudiantes->est_id)}}" method="POST"  >
			@csrf

			<div class="row">
			 			
				<div class="form-group col-md-4">
					<label for="">Nombre:</label>
				    <input value="{{$estudiantes->est_nombre}}"  type="text" name="est_nombre" id="est_nombre" class="form-control @error('est_nombre') is-invalid @enderror" name="est_nombre" value="{{ old('est_nombre') }}" required autocomplete="est_nombre" autofocus placeholder="Escriba su nombre">
				     @error('est_nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  				</div>
	  			<div class="form-group col-md-4">
					<label for="">Apellido:</label>
				    <input value="{{$estudiantes->est_apellido}}" type="text" name="est_apellido" id="est_apellido" class="form-control @error('est_apellido') is-invalid @enderror" name="est_apellido" value="{{ old('est_apellido') }}" required autocomplete="est_apellido" autofocus placeholder="Escriba su apellido">

				        @error('est_apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
	  			</div>
	  		
	  			<div class="form-group col-md-4">
					<label for="">Cédula: </label>
				    <input value="{{$estudiantes->est_cedula}}" type="number" name="est_cedula" id="est_cedula" class="form-control @error('est_cedula') is-invalid @enderror" name="est_cedula" value="{{ old('est_cedula') }}" required autocomplete="est_cedula" autofocus placeholder="Escriba su numero de cedula" maxlength="10">

				     @error('est_cedula')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
	  			</div>
	  			<div class=" form-group col-md-6">
					<label for="">Curso:</label>
					<select value="{{$estudiantes->cur_id}}"  name="cur_id" id="cur_id" class="form-control @error('cur_id') is-invalid @enderror" name="cur_id" value="{{ old('cur_id') }}" required autocomplete="cur_id" autofocus>
						 @error('cur_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					
								@foreach($cursos as $c)
						<option value="{{$c->cur_id}}"->{{$c->cur_detalle}}</option>
						@endforeach
			
						
					</select>
  				</div>
  				<div class="col-md-6">
					<label for="">Paralelo:</label>
					<select value="{{$estudiantes->par_id}}"  name="par_id" id="par_id" class="form-control @error('par_id') is-invalid @enderror" name="par_id" value="{{ old('par_id') }}" required autocomplete="par_id" autofocus >
						 @error('par_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						
						@foreach($paralelo as $p)
						<option value="{{$p->par_id}}"->{{$p->par_detalle}}</option>
						@endforeach
					
						
						
					</select>
  				</div>
  				<div class=" form-group col-md-6">
					<label for="">Especialidad:</label>
					<select value="{{$estudiantes->esp_id}}"  name="esp_id" id="esp_id" class="form-control @error('esp_id') is-invalid @enderror" name="esp_id" value="{{ old('esp_id') }}" required autocomplete="esp_id" autofocus>

						  @error('esp_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
			
						@foreach($especialidad as $e)
						<option value="{{$e->esp_id}}"->{{$e->esp_detalle}}</option>
						@endforeach
		
				
					</select>
  				</div>
  				 <div class=" form-group col-md-6">
					<label for="">Representante:</label>
					<select value="{{$estudiantes->rep_id}}"  name="rep_id" id="rep_id" class="form-control @error('rep_id') is-invalid @enderror" name="rep_id" value="{{ old('rep_id') }}" required autocomplete="rep_id" autofocus>
						  @error('rep_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					<!-- 	<option value="">Elija una opcion</option> -->
						@foreach($representantes as $r)
						<option value="{{$r->rep_id}}">{{$r->rep_cedula}}</option>
						@endforeach
					</select>
  				</div>
  				<div class="form-group col-md-6">
					<label for="">Fecha:</label>
					<input value="{{$estudiantes->est_fecha}}" type="date" name="est_fecha" id="est_fecha" class="form-control @error('est_fecha') is-invalid @enderror" name="est_fecha" value="{{ old('est_fecha') }}" required autocomplete="est_fecha" autofocus >
					    @error('est_fecha')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  				</div>
  				</div>
	  	
				<div class="form-group ">
					<button   type="submit" class="btn btn-primary"><img src="https://cdn-icons-png.flaticon.com/512/60/60959.png" width="15px"> Registrar</button>
				</div>
		</form> 
	</div>
</div>
</div>
		</div>
	</div>
		</div>	
@endsection