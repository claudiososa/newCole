@extends('layouts.admin')
@section('content')

	<div class="columns">
		<div class="column is-10 is-offset-1">
			<table class="table is-striped">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>DNI</th>
						<th>Tipo</th>
						<th>Estado</th>
						<th>Profile</th>
						<th>Destroy</th>
					</tr>
				</thead>

				<tbody>
					@foreach($users as $user)
						<tr>

								<th>
									{{ $user->id }}
								</th>

								<th>
									{{ $user->name }}
								</th>

								<th>
									{{ $user->email }}
								</th>

								<th>
									{{ $user->dni }}
								</th>

								<th>
									{{ $user->type }}
								</th>

								<th>
									{{ $user->status }}
								</th>


								<th>
									<a href="/users/{{ $user->id}}/edit">Editar</a>
								</th>

								<th>

									<form action="/users/{{$user->id}}" method="post">

										{{ csrf_field() }}
								    {{ method_field('DELETE') }}
										<button class="button is-small is-danger">X</button>

									</form>

								</th>

						</tr>
					@endforeach
				</tbody>
			</table>
			<div class="mt-2 mx-auto">
					{{$users->links('pagination::bootstrap-4')}}
			</div>

			<a href="{{ url('users/create') }}">Create new user</a>

		</div>
	</div>


@endsection
