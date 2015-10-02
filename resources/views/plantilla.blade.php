<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel</title> 

{!! Html::style('assets/css/bootstrap.css') !!}
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
{!! Html::style('assets/css/AdminLTE.min.css') !!}
{!! Html::style('assets/css/skins/_all-skins.min.css') !!}

</head>
<body class="skin-blue">
	<div class="wrapper">
		<header class="main-header">
			<!-- Logo -->
			<a href="#" class="logo"><b>Admin </b>usuarios</a>
			<nav class="navbar navbar-static-top" role="navigation">
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span>
				</a>
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown user user-menu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
						{!! HTML::image('assets/img/user2-160x160.jpg', 'imagen de usuario', array('class' => 'user-image')) !!} 
						<span class="hidden-xs">{{ Auth::user()->nombre }}  {{ Auth::user()->apellidoPaterno }} {{ Auth::user()->apellidoMaterno}} </span>
						</a>
							<ul class="dropdown-menu">
								<!-- User image -->
								<li class="user-header">
									{!! HTML::image('assets/img/user2-160x160.jpg', 'imagen de usuario', array('class' => 'img-circle')) !!}
									<p>
										{{ Auth::user()->nombre }} <small> {{ Auth::user()->apellidoPaterno }} {{ Auth::user()->apellidoMaterno}}</small>
									</p></li>
								<!-- Menu Body -->
								<li class="user-body">
									<div class="col-xs-12 text-center">
										<a href="#">@if (Auth::user()->tipo =="1") Administrador @else Usuario @endif</a>
									</div>
								</li>
								<!-- Menu Footer-->
								<li class="user-footer">
									<div class="pull-right">
										<a href="{{route('auth/logout')}}" class="btn btn-default btn-flat">Cerrar sesi&oacute;n</a>
									</div>
								</li>
							</ul></li>
					</ul>
				</div>
			</nav>
		</header>
		<aside class="main-sidebar">
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image">
						{!! HTML::image('assets/img/user2-160x160.jpg', 'imagen de usuario', array('class' => 'img-circle')) !!}
					</div>
					<div class="pull-left info">
						<p>{{ Auth::user()->nombre }} {{ Auth::user()->apellidoPaterno }} {{ Auth::user()->apellidoMaterno}}</p>
						<small>@if (Auth::user()->tipo =="1") Administrador @else Usuario @endif</small>
					</div>
				</div>
				<ul class="sidebar-menu">
					<li class="header">NAVEGACION</li>
					<li><a href="{{route("admin.user.index")}}"><i class="fa fa-th"></i> <span>Listado de usuarios</span> </a></li>
					<li class="treeview"><a href="{{route("admin.user.create")}}"> <i class="fa fa-edit"></i> <span>Crear nuevo usuario</span> </i></a></li>
				</ul>
			</section>
		</aside>
		@yield('content')
		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 1.0
			</div>
			<strong>Copyright &copy; 2014-2015 jlpalillero
			</strong> All rights reserved.
		</footer>
	</div>
	<!-- Scripts -->
	{!! Html::script('assets/plugins/jQuery/jQuery-2.1.3.min.js') !!} 
	{!! Html::script('assets/js/bootstrap.min.js') !!} 
	{!! Html::script('assets/js/app.js') !!} 
	{!! Html::script('assets/js/demo.js') !!} 

</body>
</html>