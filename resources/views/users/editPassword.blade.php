@extends('layouts.admin')



@section('content')

<div class="columns">

		<div class="column is-10 is-offset-1">
			<h1>Modificando {{$users->name}} </h1>

			<form action="/update/password" method="post">

				{{ csrf_field() }}
		    {{-- {{ method_field('PATCH') }} --}}

				<input type="hidden" name="id" value="{{$users->id}}">
        <div class="input-field">
          <label class="field">
            <input type="password" class="input" name="password"  autocomplete="nope" placeholder="password" autofocus >
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
