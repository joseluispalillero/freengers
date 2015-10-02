<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    
    {!! Html::style('assets/css/bootstrap.css') !!}
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    {!! Html::style('assets/css/AdminLTE.min.css') !!}
    
  </head>
  <body class="login-page">
  
  
    <div class="login-box">
	  	@if (Session::has("mensaje"))
			<p class="alert alert-success">{{ Session::get('mensaje') }}</p>
		@endif
      <div class="login-logo">
        <a href="../../index2.html"><b>Login</b> Bienvenidos</a>
      </div>
      <div class="login-box-body">
	  	<div class="login-box-msg" style="text-align: left !important">
	  	
			@if (Session::has('errors'))
			    <div class="alert alert-error" role="alert">
				<ul>
		            <strong>Ocurrio el siguiente error: </strong>
				    @foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
	    </div>
        <p class="login-box-msg">Inicia sesion</p>
        {!! Form::open(['route' => 'auth/login', 'class' => 'form']) !!}
          	<input type="hidden" value="1" name="remember">
          <div class="form-group has-feedback">
            {!! Form::email('email', '', ['class'=> 'form-control', 'placeholder' =>"Email"]) !!}
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
          	{!! Form::password('password', ['class'=> 'form-control', 'placeholder' =>"Password"]) !!}
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
          	<div class="col-xs-3">
          	</div>
            <div class="col-xs-6">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar sesi&oacute;n</button>
            </div><!-- /.col -->
            <div class="col-xs-3">
          	</div>
          </div>
        {!! Form::close() !!}
          
        <div class="social-auth-links text-center">
          <p>- O -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Ingresar usando Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Ingresar usando Google+</a>
        </div>

        <a href="#">Olvidaste tu password?</a><br>
        <a href="{{route('auth/register')}}" class="text-center">Registrate</a>

      </div>
    </div>

    {!! Html::script('assets/plugins/jQuery/jQuery-2.1.3.min.js') !!}
	{!! Html::script('assets/js/bootstrap.min.js') !!}
    
  </body>
</html>