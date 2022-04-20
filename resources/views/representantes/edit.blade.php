@extends('layouts.app')
@section('content')

<div class="container col-md-4" >
	<div class="col-md-12" style="margin-top: 2%;">
		<h3 style="font-family:algeria;text-align: center;"><img src="" width="40px"> Registro de Usuarios</h3>
		 <form action="{{route('representantes.update',$representantes->rep_id)}}" method="POST">
			@csrf
				<div class="form-group">

					<label for="">Nombre:</label>
				    <input type="text" value="{{$representantes->rep_nombre}}" name="rep_nombre" id="rep_nombre" class="form-control @error('rep_nombre') is-invalid @enderror" name="rep_nombre" value="{{ old('rep_nombre') }}" required autocomplete="rep_nombre" autofocus placeholder="Escriba su nombre">
				       @error('rep_nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  				</div>
	  			<div class="form-group">
					<label for="">Apellido:</label>
				    <input  value="{{$representantes->rep_apellido}}"type="text" name="rep_apellido" id="rep_apellido" class="form-control @error('rep_nombre') is-invalid @enderror" name="rep_nombre" value="{{ old('rep_nombre') }}" required autocomplete="rep_nombre" autofocus  placeholder="Escriba su apellido">

                                @error('rep_apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
	  			</div>
	  			
	  			<div class="form-group">
					<label for="">Cedula: </label>
				    <input  value="{{$representantes->rep_cedula}}"type="text" name="rep_cedula" id="rep_cedula" class="form-control @error('rep_cedula') is-invalid @enderror" name="rep_cedula" value="{{ old('rep_cedula') }}" required autocomplete="rep_cedula" autofocus placeholder="Escriba su numero de cedula" maxlength="10">

				                 @error('rep_cedula')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
	  			</div>
	  			<div class="">
					<label for="">Fecha</label>
					<input  value="{{$representantes->rep_fecha}}"type="date" name="rep_fecha" id="rep_fecha" class="form-control @error('rep_fecha') is-invalid @enderror" name="rep_fecha" value="{{ old('rep_fecha') }}" required autocomplete="rep_fecha" autofocus>

					            @error('rep_fecha')
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

