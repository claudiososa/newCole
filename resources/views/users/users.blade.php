@extends('layouts.admin')
@section('content')

	<div class="container">
			<div class="navbar navbar-expand-lg">
					<ul class="navbar-nav">
							<li class="nav-item">
									<a href="javascript:void(0)" class=" btn-circle-round sidebar-toggler">
											<i class="icon-menu"></i>
									</a>
							</li>
							<li class="nav-item ml-3 hidden-md-down">
								<form action="{{route('searchUser')}}" class="form-inline my-2 my-lg-0" method="post">
									{{csrf_field()}}
										<input name="dni" class="form-control mr-sm-2" type="text" placeholder="DNI...">
										<input name="surname" class="form-control mr-sm-2" type="text" placeholder="Apellido...">
										<input name="name" class="form-control mr-sm-2" type="text" placeholder="Nombre...">
										<button class="icon-search" type="submit"><i class="ion-ios-search-strong"></i></button>
									</form>
							</li>
					</ul>

			</div>
	</div>

	{{-- <div class="container">
		<form action="{{route('searchUser')}}" class="form-inline my-2 my-lg-0" method="post">
			{{csrf_field()}}
				<input name="dni" class="form-control mr-sm-2" type="text" placeholder="Buscar Usuario DNI...">
				<input name="surname" class="form-control mr-sm-2" type="text" placeholder="Buscar Usuario Apellido...">
				<input name="name" class="form-control mr-sm-2" type="text" placeholder="Buscar Usuario Nombre...">
				<button class="icon-search" type="submit"><i class="ion-ios-search-strong"></i></button>
		</form>
	</div> --}}

	</div>
	<div class="columns">
		<div class="column is-10 is-offset-1">
			<table class="table is-striped">
				<thead>
					<tr>
						<th>Id</th>
						<th>Apellidos</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>DNI</th>
						<th>Tipo</th>
						<th>Estado</th>
						<th>Perfil</th>
						<th>Contraseña</th>
						<th>Eliminar</th>
					</tr>
				</thead>

				<tbody>
					@foreach($users as $user)
						<tr>

								<th>
									{{ $user->id }}
								</th>

								<th>
									{{ $user->profile->surname }}
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
									<a href="/users/{{ $user->id}}/edit">Modificar</a>
								</th>

								<th>
									<a href="/update/password/{{ $user->id}}">Modificar</a>
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
