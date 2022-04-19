@extends('layouts.app')
@section('content')


<div class="container col-md-4" >
	<div class="col-md-12" style="margin-top: 2%;">
		<h3 style="font-family:algeria;text-align: center;"><img src="" width="40px"> Registro de Estudiantes</h3>
		 <form action="{{route('estudiantes.update',$estudiantes->est_id)}}" method="POST" >
			@csrf
			<div class="row">
			 			
				<div class="form-group">
					<label for="">Nombre:</label>
				    <input value="{{$estudiantes->est_nombre}}"  type="text" name="est_nombre" id="est_nombre" class="form-control" placeholder="Escriba su nombre">
  				</div>
	  			<div class="form-group">
					<label for="">Apellido:</label>
				    <input value="{{$estudiantes->est_apellido}}" type="text" name="est_apellido" id="est_apellido" class="form-control" placeholder="Escriba su apellido">
	  			</div>
	  		
	  			<div class="form-group">
					<label for="">Cédula: </label>
				    <input value="{{$estudiantes->est_cedula}}" type="number" name="est_cedula" id="est_cedula" class="form-control" placeholder="Escriba su numero de cedula" maxlength="10">
	  			</div>
	  			<div class="col-md-6">
					<label for="">Curso:</label>
					<select value="{{$estudiantes->est_curso}}"  name="est_curso" id="est_curso" class="form-control">
						
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
					<select value="{{$estudiantes->est_paralelo}}"  name="est_paralelo" id="est_paralelo" class="form-control">
						
						
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
						
						
					</select>
  				</div>
  				<div class="col-md-6">
					<label for="">Especialidad:</label>
					<select value="{{$estudiantes->est_especialidad}}"  name="est_especialidad" id="est_especialidad" class="form-control">
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
					<select value="{{$estudiantes->rep_id}}"  name="rep_id" id="rep_id" class="form-control">
					<!-- 	<option value="">Elija una opcion</option> -->
						@foreach($representantes as $r)
						<option value="{{$r->rep_id}}">{{$r->rep_cedula}}</option>
						@endforeach
					</select>
  				</div>
  				<div class="col-md-6">
					<label for="">Fecha:</label>
					<input value="{{$estudiantes->est_fecha}}" type="date" name="est_fecha" id="est_fecha" class="form-control" >
  				</div>
  				</div>
	  	
				<div class="form-group">
					<button   type="submit" class="btn btn-primary"><img src="https://cdn-icons-png.flaticon.com/512/60/60959.png" width="15px"> Registrar</button>
				</div>
		</form> 
	</div>
</div>	
@endsection