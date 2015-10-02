@extends('plantilla')
@section('content')
<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Listado de usuarios</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						@if (Session::has("mensaje"))
							<p class="alert alert-success">{{ Session::get('mensaje') }}</p>
						@endif
						<a href="{{route("admin.user.create")}}" type="button" id="" class="btn btn-primary">Crear usuario</a>
						<table id="example2" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Id</th>
									<th>Nombre</th>
									<th>Apellido Paterno</th>
									<th>Apellido Materno</th>
									<th>Telefono</th>
									<th>Email</th>
									<th>Vendedor</th>
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($users as $user)
								<tr>
									<td>{{ $user->id }}</td>
									<td>{{ $user->nombre }}</td>
									<td>{{ $user->apellidoPaterno }}</td>
									<td>{{ $user->apellidoMaterno }}</td>
									<td>{{ $user->telefono }}</td>
									<td>{{ $user->email }}</td>
									<td>{{ $user->vendedor }}</td>
									<td>
										<a href="{{ route("admin.user.edit", $user)}}" class="btn btn-info">Editar</a>
										{!! Form::open(['route' => ['admin.user.destroy', $user], 'method'=>'DELETE']) !!}
										{!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!}
										{!! Form::close() !!}										
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						{!! $users->render() !!}
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
		</div>
	</section>
</div>
@endsection

