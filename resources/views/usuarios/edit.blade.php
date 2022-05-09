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
		<h3 style="font-family:algeria;text-align: center;"><img src="" width="40px"> Registro de Usuarios</h3>
	</div>
	<div class="card-body">
		 <form action="{{route('usuarios.update',$usuarios->usu_id)}}" method="POST"  >
			@csrf
			<div class="row">
				<div class="form-group col-md-6">
					<label for="">Nombre:</label>
				    <input   value="{{$usuarios->usu_nombre}}" type="text" name="usu_nombre" id="usu_nombre" class="form-control" placeholder="Escriba su nombre">
  				</div>
	  			<div class="form-group col-md-6">
					<label for="">Apellido:</label>
				    <input  value="{{$usuarios->usu_apellido}}" type="text" name="usu_apellido" id="usu_apellido" class="form-control" placeholder="Escriba su apellido">
	  			</div>
	  			<div class="form-group col-md-6">
					<label for="">Email:</label>
				    <input  value="{{$usuarios->email}}" type="email" name="email" id="email" class="form-control" placeholder="Escriba su email">
	  			</div>
	  			<div class="form-group col-md-6">
					<label for="">Cédula: </label>
				    <input  value="{{$usuarios->usu_cedula}}" type="text" name="usu_cedula" id="usu_cedula" class="form-control" placeholder="Escriba su número de cédula" maxlength="10">
	  			</div>
	  			<div class="form-group col-md-6">
					<label for="">Contraseña: </label>
				    <input  value="{{$usuarios->password}}" type="password" name="password" id="password" class="form-control" placeholder="Escriba su contraseña">
	  			</div>
	  		</div>
				<div class="form-group">
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
