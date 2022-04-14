@extends('layouts.app')
@section('content')


<div class="container col-md-4" >
	<div class="col-md-12" style="margin-top: 2%;">
		<h3 style="font-family:algeria;text-align: center;"><img src="" width="40px"> Registro de Usuarios</h3>
		 <form action="{{route('usuarios.store')}}" method="POST" >
			@csrf
				<div class="form-group">
					<label for="">Nombre:</label>
				    <input type="text" name="est_nombre" id="est_nombre" class="form-control" placeholder="Escriba su nombre">
  				</div>
	  			<div class="form-group">
					<label for="">Apellido:</label>
				    <input type="text" name="est_apellido" id="est_apellido" class="form-control" placeholder="Escriba su apellido">
	  			</div>
	  		
	  			<div class="form-group">
					<label for="">Cedula: </label>
				    <input type="text" name="est_cedula" id="est_cedula" class="form-control" placeholder="Escriba su numero de cedula" maxlength="10">
	  			</div>
	  			<div class="col-md-6">
					<label for="">Tipo</label>
					<select   name="tip_id" id="tip_id" class="form-control">
						<option value="">Elija una opcion</option>
						@foreach($tipo as $tip)
						<option value="{{$tip->tip_id}}">{{$tip->tip_descripcion}}</option>
						@endforeach
					</select>
  				</div>
  				<div class="col-md-6">
					<label for="">Tipo</label>
					<select   name="tip_id" id="tip_id" class="form-control">
						<option value="">Elija una opcion</option>
						@foreach($tipo as $tip)
						<option value="{{$tip->tip_id}}">{{$tip->tip_descripcion}}</option>
						@endforeach
					</select>
  				</div>
  				<div class="col-md-6">
					<label for="">Tipo</label>
					<select   name="tip_id" id="tip_id" class="form-control">
						<option value="">Elija una opcion</option>
						@foreach($tipo as $tip)
						<option value="{{$tip->tip_id}}">{{$tip->tip_descripcion}}</option>
						@endforeach
					</select>
  				</div>
	  	
				<div class="form-group">
					<button   type="submit" class="btn btn-primary"><img src="https://cdn-icons-png.flaticon.com/512/60/60959.png" width="15px"> Registrar</button>
				</div>
		</form> 
	</div>
</div>	
@endsectiest