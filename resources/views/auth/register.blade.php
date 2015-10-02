<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Registrase</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	{!! Html::style('assets/css/bootstrap.css') !!}
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	{!! Html::style('assets/css/AdminLTE.min.css') !!}
</head>
<body class="login-page">
	<div class="login-box">
		
		@if ($errors->any())
			<div class="alert alert-error">
				<ul>
				@foreach($errors->all() as $error)
					<li> {{$error}} </li>
				@endforeach
				</ul>
			</div>
		@endif
		
		<div class="login-logo">
			<a href="../../index2.html"><b>Registrarse</b> </a>
		</div>
		<div class="login-box-body">
				<div class="login-box-msg" style="text-align: left !important">
				{!! Form::open(['route' => 'admin.user.store', 'class' => 'form']) !!}
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
				<div class="form-group">
					<label>Password</label>
					{!! Form::password('password', ['class'=> 'form-control']) !!}
				</div>
				<div class="form-group">
					<label>Tipo de usuario</label>
					 {!! Form::select('tipo', [''=>'Seleccione tipo', '1'=>'Administrador', '2'=>'Usuario'], null,['class'=> 'form-control']) !!}
				</div>
				<div>{!! Form::submit('Registrarse',['class' => 'btn btn-primary']) !!}</div>
				{!! Form::close() !!}
			</div>
		
      </div>
    </div>

    {!! Html::script('assets/plugins/jQuery/jQuery-2.1.3.min.js') !!}
	{!! Html::script('assets/js/bootstrap.min.js') !!}
    
  </body>
</html>