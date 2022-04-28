@extends('layouts.app')
@section('content')
<br>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
		<h3 style="font-family:algeria;text-align: center;"><img src="" width="40px"> Registro de Pensiones </h3>
					
				</div>
				<div class="card-body">
					<form action="{{route('representantes.store')}}" method="POST" >
		</div>
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
				    <select type="text" name="usu_estado" id="usu_estado" class="form-control @error('usu_estado') is-invalid @enderror" name="usu_estado" value="{{ old('usu_estado') }}" required autocomplete="usu_estado" autofocus maxlength="10">
				    	<option selected disabled  value="">Seleccione una opción</option>
				    <option value="1">cancelado</option>
				    	<option value="0">pendiente</option>


                                @error('usu_estado')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </select> 
	  			</div>

	  				 <div class="form-group col-md-6">
					<label for="">Usuario: </label>
				    <select type="text" name="usu_id" id="usu_id" class="form-control @error('usu_id') is-invalid @enderror" name="usu_id" value="{{ old('usu_id') }}" required autocomplete="usu_id" autofocus  maxlength="10">
				    		@foreach($pensiones as $p)
						<option value="{{$p->usu_id}}">{{$p->usu_cedula}}</option>
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
				    <select type="text" name="est_id" id="est_id" class="form-control @error('est_id') is-invalid @enderror" name="est_id" value="{{ old('est_id') }}" required autocomplete="est_id" autofocus  placeholder="Escriba su numero de cedula" maxlength="10">

				    @foreach($pensiones as $p)
						<option value="{{$p->est_id}}">{{$p->est_cedula}}</option>
						@endforeach


                                @error('est_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </select>
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

@endsection