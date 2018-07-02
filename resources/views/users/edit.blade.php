@extends('layouts.admin')



@section('content')

<div class="columns">


		<div class="column is-10 is-offset-1">
			<h1>Modificando {{$users->name}} </h1>

			<form action="{{"/users/" . $users->id}}" method="post">

				{{ csrf_field() }}
		    {{ method_field('PATCH') }}

        <div class="input-field">
          <label class="field">
            <input type="text" class="input" name="name" placeholder="Nombres" value='{{$users->name}}'>
          </label>
        </div>

				<div class="input-field">
          <label class="field">
            <input type="text" class="input" name="surname" placeholder="Apellidos" value='{{$users->profile->surname}}'>
          </label>
        </div>

        <div class="input-field">
          <label class="field">
            <input type="text" class="input" name="dni" placeholder="dni" value='{{$users->dni}}'>
          </label>
        </div>

        <div class="input-field">
          <label class="field">
            <input type="text" class="input" name="email" placeholder="email" value='{{$users->email}}'>
          </label>
        </div>

        <div class="input-field">
          <label class="field">
            <input type="password" class="input" name="password"  autocomplete="nope" placeholder="password" autofocus >
          </label>
        </div>

				<div class="input-field">
          <label class="field">
            <input type="text" class="input" name="phone" placeholder="phone" value='{{$users->profile->phone}}'>
          </label>
        </div>

				<div class="input-field">
          <label class="field">
            <input type="text" class="input" name="address" placeholder="direccion" value='{{$users->profile->address}}'>
          </label>
        </div>

					<label class="field">
						<input type="submit" value="Modificar" name="submit" class="button is-primary">
					</label>

			</form>
			<a href=" {{ url('/users')}} ">View all users</a>
		</div>
	</div>

@endsection
