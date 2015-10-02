@extends('plantilla')
@section('content')
<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Listado de clientes</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						@if (Session::has("mensaje"))
							<p class="alert alert-success">{{ Session::get('mensaje') }}</p>
						@endif
						<a href="{{route("admin.cliente.create")}}" type="button" id="" class="btn btn-primary">Crear cliente</a>
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
								@foreach ($clientes as $cliente)
								<tr>
									<td>{{ $cliente->id }}</td>
									<td>{{ $cliente->nombre }}</td>
									<td>{{ $cliente->apellidoPaterno }}</td>
									<td>{{ $cliente->apellidoMaterno }}</td>
									<td>{{ $cliente->telefono }}</td>
									<td>{{ $cliente->email }}</td>
									<td>{{ $cliente->vendedor }}</td>
									<td>
										<a href="{{ route("admin.cliente.edit", $cliente)}}" class="btn btn-info">Editar</a>
										{!! Form::open(['route' => ['admin.cliente.destroy', $cliente], 'method'=>'DELETE']) !!}
										{!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!}
										{!! Form::close() !!}										
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						{!! $clientes->render() !!}
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
		</div>
	</section>
</div>
@endsection

