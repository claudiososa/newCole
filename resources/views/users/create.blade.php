@extends('layouts.admin')
@section('content')
    <a class='btn btn-success' href=" {{ url('/users')}} ">Ver todos los usuarios</a>

    <div class="container">
      <h3>Crear nuevo usuario</h3>
    </div>

  	<div class="columns">

  		<div class="column is-10 is-offset-1">
  			<form action="/users" method="post">

  				{{ csrf_field() }}

        		<div class="input-field">
  						<label class="field">
  							<input type="text" class="form-control" name="name" placeholder="nombre" required>
  						</label>
  					</div>

            <div class="input-field">
  						<label class="field">
  							<input type="text" class="form-control" name="surname" placeholder="apellido" required>
  						</label>
  					</div>

            <div class="input-field">
  						<label class="field">
  							<input type="text" class="form-control" name="dni" placeholder="dni" required>
  						</label>
  					</div>

            <div class="input-field">
  						<label class="field">
  							<input type="text" class="form-control" name="email" placeholder="email" required>
  						</label>
  					</div>

  					{{-- <div class="input-field">
  						<label class="field">
  							<input type="password" class="form-control" name="password" placeholder="password">
  						</label>
  					</div> --}}

            <div class="input-field">
  						<label class="field">
  							<input type="text" class="form-control" name="phone" placeholder="telefono">
  						</label>
  					</div>

            <div class="input-field">
  						<label class="field">
  							<input type="text" class="form-control" name="address" placeholder="direccion">
  						</label>
  					</div>

            <div class="input-field">
  						<label class="select">
                <select class="form-control" name="status">
                  <option value="Activo">Activo</option>
                  <option value="Inactivo">Inactivo</option>
                </select>
  						</label>
  					</div>

            <div class="input-field">
  						<label class="field">
                <select class="form-control" name="type">
                  <option value="Profesor">Profesor</option>
                </select>
  						</label>
  					</div>

  					{{-- <div class="input-field">
  						<label class="field">
  							<input type="text" class="input" name="email" placeholder="email">
  						</label>
  					</div> --}}

  					<label class="field">
  						<input value="Guardar" type="submit" name="Guardar" class="btn btn-primary">
  					</label>

  			</form>


  		</div>
  	</div>

@endsection
