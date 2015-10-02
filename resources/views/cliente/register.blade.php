@extends('plantilla') 

@section('content')
<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Nuevo cliente</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						{!! Form::open(['route' => 'admin.cliente.store', 'class' => 'form']) !!}
						<div class="form-group">
							<label>Nombre</label> 
							{!! Form::input('text', 'nombre', '', ['class'=> 'form-control']) !!}
						</div>
						<div class="form-group">
							<label>Apellido Paterno</label> 
							{!! Form::input('text', 'apellidoPaterno', '', ['class'=> 'form-control']) !!}
						</div>
						<div class="form-group">
							<label>Apellido Materno</label> 
							{!! Form::input('text', 'apellidoMaterno', '', ['class'=> 'form-control']) !!}
						</div>
						<div class="form-group">
							<label>Telefono</label>
							 {!! Form::input('text', 'telefono','', ['class'=> 'form-control']) !!}
						</div>
						<div class="form-group">
							<label>Email</label> 
							{!! Form::email('email', '', ['class'=> 'form-control']) !!}
						</div>
						<div>{!! Form::submit('Crear',['class' => 'btn btn-primary']) !!}</div>
						{!! Form::close() !!}
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<div class="col-md-3"></div>
		</div>
	</section>
</div>
@endsection
