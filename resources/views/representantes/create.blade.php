@extends('layouts.app')
@section('content')
<br>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">


<!-- <div class="container col-md-4" >
	<div class="col-md-12" style="margin-top: 25%;"> -->
		<h3 style="font-family:algeria;text-align: center;"><img src="" width="40px">Registro de Representantes</h3>
	</div>
	<div class="card-body">
		 <form action="{{route('representantes.store')}}" method="POST" >
			@csrf
			<div class="row">
				
				<div class="form-group col-md-6">
					<label for="">Nombre:</label>
				    <input type="text" name="rep_nombre" id="rep_nombre" class="form-control @error('rep_nombre') is-invalid @enderror" name="rep_nombre" value="{{ old('rep_nombre') }}" required autocomplete="rep_nombre" autofocus placeholder="Escriba su nombre" >

                                @error('rep_nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  				</div>
	  			<div class="form-group col-md-6">
					<label for="">Apellido:</label>
				    <input type="text" name="rep_apellido" id="rep_apellido" class="form-control @error('rep_apellido') is-invalid @enderror" name="rep_apellido" value="{{ old('rep_apellido') }}" required autocomplete="rep_apellido" autofocus  placeholder="Escriba su apellido" >
                                

                                @error('rep_apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
	  			</div>
	  			
	  			<div class="form-group col-md-6">
					<label for="">Cédula:</label>
				    <input type="text" name="rep_cedula" id="rep_cedula" class="form-control @error('rep_cedula') is-invalid @enderror" name="rep_cedula" value="{{ old('rep_cedula') }}" required autocomplete="rep_cedula" autofocus  placeholder="Escriba su numero de cedula" maxlength="10">


                                @error('rep_cedula')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
	  			</div>

				<div class="form-group col-md-6">
					<label for="">Fecha:</label>
					<input type="date" name="rep_fecha" id="rep_fecha" class="form-control @error('rep_fecha') is-invalid @enderror" name="rep_fecha" value="{{ old('rep_fecha') }}" required autocomplete="rep_fecha" autofocus >


                                @error('rep_fecha')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
  				</div>
			</div>
	  			
				<div class="form-group col-md-6">
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

