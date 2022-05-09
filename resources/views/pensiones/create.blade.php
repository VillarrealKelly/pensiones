@extends('layouts.app')
@section('content')
<br>
<br>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
		<h3 style="font-family:algeria;text-align: center;"><img src="" width="40px"> Registro de Pensiones </h3>
					
				</div>
				<div class="card-body">
					<form action="{{route('pensiones.store')}}" method="POST" >
			@csrf
			<div class="row">
				
				<div class="form-group col-md-6">
					<label for="">Cantidad</label>
				    <input type="number" name="pen_cantidad" id="pen_cantidad" class="form-control @error('pen_cantidad') is-invalid @enderror" name="pen_cantidad" value="{{ old('pen_cantidad') }}" required autocomplete="pen_cantidad" autofocus placeholder="Ponga una cantidad" >

                                @error('pen_cantidad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  				</div>
				<div class="form-group col-md-6">
					<label for="">Fecha:</label>
					<input type="date" name="pen_fecha" id="pen_fecha" class="form-control @error('pen_fecha') is-invalid @enderror" name="pen_fecha" value="{{ old('pen_fecha') }}" required autocomplete="pen_fecha" autofocus  >


                                @error('pen_fecha')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
  				</div>
	  			<div class="form-group col-md-6">
					<label for="">Cantidad pagada:</label>
				    <input  type="number" name="pen_cant_paga" id="pen_cant_paga" class="form-control @error('pen_cant_paga') is-invalid @enderror" name="pen_cant_paga" value="{{ old('pen_cant_paga') }}" required autocomplete="pen_cant_paga" autofocus  placeholder="Escriba una cantidad" >
				    	
                                

                                @error('pen_cant_paga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                    
	  			</div>
	  			
	  			<div class="form-group col-md-6">
					<label for="">Estado: </label>
				    <select type="text" name="pen_estado" id="pen_estado" class="form-control @error('pen_estado') is-invalid @enderror" name="pen_estado" value="{{ old('pen_estado') }}" required autocomplete="pen_estado" autofocus maxlength="10">
				    	<option selected disabled  value="">Seleccione una opción</option>
				    <option value="cancelado">cancelado</option>
				    	<option value="pendiente">pendiente</option>


                                @error('pen_estado')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </select> 
	  			</div>

	  				 <div class="form-group col-md-6">
					<label for="">Usuario: </label>
				    <select type="text" name="usu_id" id="usu_id" class="form-control @error('usu_id') is-invalid @enderror" name="usu_id" value="{{ old('usu_id') }}" required autocomplete="usu_id" autofocus  maxlength="10">
				    		@foreach($usuarios as $u)
				    	<option selected disabled  value="">Seleccione una opción</option>
						<option value="{{$u->usu_id}}">{{$u->usu_cedula}}</option>
						@endforeach


                                @error('usu_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 

                                </select>
	  			</div>
	  				 <div class="form-group col-md-6">
					<label for="">Estudiantes: </label>
					
				 
					<select class="form-control  @error('est_id') is-invalid @enderror" name="est_id" value="{{ old('est_id') }}" required autocomplete="est_id" autofocus  maxlength="10" id="estudiantes"  type="text" name="est_id"  >
				    		@foreach($estudiantes as $e)
				    	<option selected disabled  value="">Seleccione una opción</option>
						<option value="{{$e->est_id}}">{{$e->est_cedula}}</option>
						@endforeach

					</select>

				<!-- 	<script>
	
					$("#estudiantes").select2({
  					tags: true
					});
					</script> -->

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