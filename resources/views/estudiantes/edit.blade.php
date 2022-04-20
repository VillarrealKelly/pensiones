@extends('layouts.app')
@section('content')

<div class="container col-md-4" >
	<div class="col-md-12" style="margin-top: 2%;">
		<h3 style="font-family:algeria;text-align: center;"><img src="" width="40px"> Registro de Estudiantes</h3>
		 <form action="{{route('estudiantes.update',$estudiantes->est_id)}}" method="POST"  >
			@csrf
			<div class="row">
			 			
				<div class="form-group">
					<label for="">Nombre:</label>
				    <input value="{{$estudiantes->est_nombre}}"  type="text" name="est_nombre" id="est_nombre" class="form-control @error('est_nombre') is-invalid @enderror" name="est_nombre" value="{{ old('est_nombre') }}" required autocomplete="est_nombre" autofocus placeholder="Escriba su nombre">
				     @error('est_nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  				</div>
	  			<div class="form-group">
					<label for="">Apellido:</label>
				    <input value="{{$estudiantes->est_apellido}}" type="text" name="est_apellido" id="est_apellido" class="form-control @error('est_apellido') is-invalid @enderror" name="est_apellido" value="{{ old('est_apellido') }}" required autocomplete="est_apellido" autofocus placeholder="Escriba su apellido">

				        @error('est_apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
	  			</div>
	  		
	  			<div class="form-group">
					<label for="">Cédula: </label>
				    <input value="{{$estudiantes->est_cedula}}" type="number" name="est_cedula" id="est_cedula" class="form-control @error('est_cedula') is-invalid @enderror" name="est_cedula" value="{{ old('est_cedula') }}" required autocomplete="est_cedula" autofocus placeholder="Escriba su numero de cedula" maxlength="10">

				     @error('est_cedula')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
	  			</div>
	  			<div class="col-md-6">
					<label for="">Curso:</label>
					<select value="{{$estudiantes->est_curso}}"  name="est_curso" id="est_curso" class="form-control @error('est_curso') is-invalid @enderror" name="est_curso" value="{{ old('est_curso') }}" required autocomplete="est_curso" autofocus>
						 @error('est_curso')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						
						<option value="OCTAVO">OCTAVO</option>
						<option value="NOVENO">NOVENO</option>
						<option value="DÉCIMO">DÉCIMO</option>
						<option value="PRIMERO">PRIMERO</option>
						<option value="SEGUNDO">SEGUNDO</option>
						<option value="TERCERO">TERCERO</option>
						
					</select>
  				</div>
  				<div class="col-md-6">
					<label for="">Paralelo:</label>
					<select value="{{$estudiantes->est_paralelo}}"  name="est_paralelo" id="est_paralelo" class="form-control @error('est_paralelo') is-invalid @enderror" name="est_paralelo" value="{{ old('est_paralelo') }}" required autocomplete="est_paralelo" autofocus >
						 @error('est_paralelo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						
						
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
						
						
					</select>
  				</div>
  				<div class="col-md-6">
					<label for="">Especialidad:</label>
					<select value="{{$estudiantes->est_especialidad}}"  name="est_especialidad" id="est_especialidad" class="form-control @error('est_especialidad') is-invalid @enderror" name="est_especialidad" value="{{ old('est_especialidad') }}" required autocomplete="est_especialidad" autofocus>

						  @error('est_especialidad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<!-- <option value="">Elija una opcion</option> -->
						<option value="Informatica">Informática</option>
						<option value="Electronica">Electrónica</option>
						<option value="Contabilidad">Contabilidad</option>
						<option value="Electricidad">Electricidad</option>
						<option value="Mecanica Industrial">Mecánica Industrial</option>
						<option value="Mecanica Automotriz">Mecánica Automotriz</option>
				
					</select>
  				</div>
  				 <div class="col-md-6">
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
  				<div class="col-md-6">
					<label for="">Fecha:</label>
					<input value="{{$estudiantes->est_fecha}}" type="date" name="est_fecha" id="est_fecha" class="form-control @error('est_fecha') is-invalid @enderror" name="est_fecha" value="{{ old('est_fecha') }}" required autocomplete="est_fecha" autofocus >
					    @error('est_fecha')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  				</div>
  				</div>
	  	
				<div class="form-group">
					<button   type="submit" class="btn btn-primary"><img src="https://cdn-icons-png.flaticon.com/512/60/60959.png" width="15px"> Registrar</button>
				</div>
		</form> 
	</div>
</div>	
@endsection