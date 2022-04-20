@extends('layouts.app')
@section('content')

<div class="container col-md-4" >
	<div class="col-md-12" style="margin-top: 2%;">
		<h3 style="font-family:algeria;text-align: center;"><img src="" width="40px"> Registro de Usuarios</h3>
		 <form action="{{route('usuarios.update',$usuarios->usu_id)}}" method="POST"  >
			@csrf
				<div class="form-group">
					<label for="">Nombre:</label>
				    <input   value="{{$usuarios->usu_nombre}}" type="text" name="usu_nombre" id="usu_nombre" class="form-control" placeholder="Escriba su nombre">
  				</div>
	  			<div class="form-group">
					<label for="">Apellido:</label>
				    <input  value="{{$usuarios->usu_apellido}}" type="text" name="usu_apellido" id="usu_apellido" class="form-control" placeholder="Escriba su apellido">
	  			</div>
	  			<div class="form-group">
					<label for="">Email:</label>
				    <input  value="{{$usuarios->email}}" type="email" name="email" id="email" class="form-control" placeholder="Escriba su email">
	  			</div>
	  			<div class="form-group">
					<label for="">Cedula: </label>
				    <input  value="{{$usuarios->usu_cedula}}" type="text" name="usu_cedula" id="usu_cedula" class="form-control" placeholder="Escriba su numero de cedula" maxlength="10">
	  			</div>
	  			<div class="form-group">
					<label for="">Contraseña: </label>
				    <input  value="{{$usuarios->password}}" type="password" name="password" id="password" class="form-control" placeholder="Escriba su contraseña">
	  			</div>
				<div class="form-group">
					<button   type="submit" class="btn btn-primary"><img src="https://cdn-icons-png.flaticon.com/512/60/60959.png" width="15px"> Registrar</button>
				</div>
		</form> 
	</div>
</div>	
@endsection
