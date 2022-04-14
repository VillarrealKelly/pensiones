@extends('layouts.app')
@section('content')


<div class="container col-md-4" >
	<div class="col-md-12" style="margin-top: 2%;">
		<h3 style="font-family:algeria;text-align: center;"><img src="" width="40px"> Registro de Usuarios</h3>
		 <form action="{{route('representantes.update',$representantes->rep_id)}}" method="POST" >
			@csrf
				<div class="form-group">

					<label for="">Nombre:</label>
				    <input type="text" value="{{$representantes->rep_nombre}}" name="rep_nombre" id="rep_nombre" class="form-control" placeholder="Escriba su nombre">
  				</div>
	  			<div class="form-group">
					<label for="">Apellido:</label>
				    <input  value="{{$representantes->rep_apellido}}"type="text" name="rep_apellido" id="rep_apellido" class="form-control" placeholder="Escriba su apellido">
	  			</div>
	  			
	  			<div class="form-group">
					<label for="">Cedula: </label>
				    <input  value="{{$representantes->rep_cedula}}"type="text" name="rep_cedula" id="rep_cedula" class="form-control" placeholder="Escriba su numero de cedula" maxlength="10">
	  			</div>
	  			<div class="">
					<label for="">Fecha</label>
					<input  value="{{$representantes->rep_fecha}}"type="date" name="rep_fecha" id="rep_fecha" class="form-control" >
  				</div>
	  			
				<div class="form-group">
					<button   type="submit" class="btn btn-primary"><img src="https://cdn-icons-png.flaticon.com/512/60/60959.png" width="15px"> Registrar</button>
				</div>
		</form> 
	</div>
</div>	
@endsection

