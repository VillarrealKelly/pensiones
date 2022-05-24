@extends('layouts.app')
@section('content')

<br>
<br>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-5">
			<div class="card">
				<div class="card-header">
		<h1 style="font-family:algeria;text-align: center;"><img src="https://salarios.trabajo.gob.ec/imagenes/registroTrabajo.png" width="40px"> Formulario de nuevo</h1>
		</div>
		<div class="card-body">	 
		<form action="{{route('cursos.store')}}" method="POST" onsubmit="return validar()">
			@csrf
<div class="container">
	<div class="row">
	<div class="col-md-8">
		<div class="form-group">
					<label for="">Nuevo curso:</label>
				    <input type="text" name="cur_detalle" id="cur_detalle" class="form-control  @error('cur_detalle') is-invalid @enderror" name="cur_detalle" value="{{ old('cur_detalle') }}" required autocomplete="cur_detalle" autofocus placeholder="Escriba el nuevo curso">
				    
				       @error('cur_detalle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
	  			</div>
	  			<div class="form-group">
					<button type="submit" class="btn btn-primary"><img src="https://cdn-icons-png.flaticon.com/512/60/60959.png" width="15px"> Registrar</button>
				</div>

		

	
			
	</div>	
	</div>
</div>



		</form>
	</div>
</div>	
</div>
		</div>
	</div>

@endsection