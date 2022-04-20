@extends('layouts.app')
@section('content')


<div class="container col-md-4" >
	<div class="col-md-12" style="margin-top: 2%;">
		<h3 style="font-family:algeria;text-align: center;"><img src="" width="40px"> Registro de Usuarios</h3>
		 <form action="{{route('usuarios.store')}}" method="POST" >
			@csrf
				<div class="form-group">
					<label for="">Nombre:</label>
				    <input type="text" name="usu_nombre" id="usu_nombre" class="form-control  @error('usu_nombre') is-invalid @enderror" name="usu_nombre" value="{{ old('usu_nombre') }}" required autocomplete="usu_nombre" autofocus placeholder="Escriba su nombre">

				                @error('usu_nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


  				</div>
	  			<div class="form-group">
					<label for="">Apellido:</label>
				    <input type="text" name="usu_apellido" id="usu_apellido" class="form-control @error('usu_apellido') is-invalid @enderror" name="usu_apellido" value="{{ old('usu_apellido') }}" required autocomplete="usu_apellido" autofocus placeholder="Escriba su apellido">

								@error('usu_apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
	  			</div>
	  			<div class="form-group">
					<label for="">Email:</label>
				    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Escriba su email">

				    			@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


	  			</div>
	  			<div class="form-group">
					<label for="">Cedula: </label>
				    <input type="text" name="usu_cedula" id="usu_cedula" class="form-control @error('usu_cedula') is-invalid @enderror" name="usu_cedula" value="{{ old('usu_cedula') }}" required autocomplete="usu_cedula" autofocus placeholder="Escriba su numero de cedula" maxlength="10">

				    			@error('usu_cedula')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


	  			</div>
	  			<div class="form-group">
					<label for="">Contraseña: </label>
				    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus placeholder="Escriba su contraseña">

				    			@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


	  			</div>
				<div class="form-group">
					<button   type="submit" class="btn btn-primary"><img src="https://cdn-icons-png.flaticon.com/512/60/60959.png" width="15px"> Registrar</button>
				</div>
		</form> 
	</div>
</div>	
@endsection
