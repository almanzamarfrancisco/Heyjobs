<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="./assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>
		HeyJobs!
	</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<!-- CSS Files -->
	<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('/css/paper-dashboard.css?v=2.0.1') }}" rel="stylesheet" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="{{ asset('/css/demo.css') }}" rel="stylesheet" />
	<link href="{{ asset('/css/awesomplete.css') }}" rel="stylesheet" />
	<style>
		.awesomplete{
			width: 80%;
		}
		.awesomplete.form-control{
			width: 100%;	
		}
	</style>
</head>

<body class="">
	<div class="loader text-center bg-primary">
		<div class="lds-roller">
			<div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
		</div>
	</div>
	<div class="wrapper ">
		<div class="sidebar" data-color="white" data-active-color="danger">
			<div class="logo">
				<a href="{{route('home')}}" class="simple-text logo-mini">
					{{-- <div class="logo-image-small">
			            <img src="{{ asset('/img/heyjobs.jpg') }}">
			        </div> --}}
			    </a>
			    <a href="{{route('home')}}" class="simple-text logo-normal">
			    	{{-- Your Logo --}}
			    	<div class="logo-image-big">
			    		<img src="{{ asset('/img/heyjobs.jpg') }}">
			    	</div>
			    </a>
			</div>
			<div class="sidebar-wrapper">
				<ul class="nav">
					@if( isset($viewsGlobal) )
					@foreach( $viewsGlobal as $view )
					<li class="{{ request()->url() === route($view->name) ? 'active':'' }} ">
						<a href="{{ route($view->name) }}">
							<i class="nc-icon {{$view->icon}}"></i>
							<p>{{$view->slug}}</p>
						</a>
					</li>
					@endforeach
					@endif
				</ul>
			</div>
		</div>
		<div class="main-panel" style="height: 100vh;">
			<!-- Navbar -->
			<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
				<div class="container-fluid">
					<div class="navbar-wrapper">
						<div class="navbar-toggle">
							<button type="button" class="navbar-toggler">
								<span class="navbar-toggler-bar bar1"></span>
								<span class="navbar-toggler-bar bar2"></span>
								<span class="navbar-toggler-bar bar3"></span>
							</button>
						</div>
						{{-- <a class="navbar-brand" href="javascript:;">@yield('title')</a> --}}
						{{auth()->user()->name}}
					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-bar navbar-kebab"></span>
						<span class="navbar-toggler-bar navbar-kebab"></span>
						<span class="navbar-toggler-bar navbar-kebab"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navigation">
						<ul class="navbar-nav">
							<li class="nav-item btn-rotate dropdown">
								<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="nc-icon nc-bell-55"></i>
									<p>
										<span class="d-lg-none d-md-block">Some Actions</span>
									</p>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
								</div>
							</li>
							<li class="nav-item btn-rotate">
								<form action="@if(auth()->user() ?? false) {{auth()->user()->getTable() === 'providers' ? route('logout_providers'):route('logout')}} @endif" method="post">
									@csrf
									<button type="submit" class="dropdown-item nav-link text-danger">
										<i class="nc-icon nc-button-power"></i> Salir
									</button>
								</form>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- End Navbar -->
			<div class="content" style="background-color: #f4f3ef;">
				<div class="row">
					<div class="col-md-12">
						{{-- <h3 class="description">Your content here</h3> --}}
						@if(auth()->user()->getTable() === 'users')
						<div class="bg-white p-5 mb-3" style="border-radius: 1.7rem">
							<h5 style="color: #343a40;font-weight: 300">Busca proveedores ...</h5>
							<form method="post" action="{{ route('search_provider') }}" id="searchForm" onsubmit="return searchSubmit();">
								@csrf
								<input type="hidden" name="type" value="{{auth()->user()->getTable()}}}}">
								<div class="input-group no-border">
									<input type="text" value="" class="form-control awesomplete" placeholder="Busca una ocupación..." name="search_occupation" id="searchOccupationInput" data-list="@foreach ($occupations ?? [] as $occupation) {{$occupation->slug}},  @endforeach">
									<div class="input-group-append" autocomplete="false">
										<button class="input-group-text" style="min-width: 50px;" type="submit">
											<i class="nc-icon nc-zoom-split" style="color: #ef8157" id="searchButton"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
						@endif
						@yield('content')
					</div>
				</div>
			</div>
			<footer class="footer" style="bottom: 0; width: -webkit-fill-available;">
				<div class="container-fluid">
					<div class="row">
						{{-- <nav class="footer-nav">
							<ul>
								<li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
								<li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
								<li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
							</ul>
						</nav> --}}
						<div class="credits ml-auto">
							<span class="copyright">
								© 2020, HeyJobs!{{-- made with <i class="fa fa-heart heart"></i> by Creative Tim --}}
							</span>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<span data-notify="message">Espera, <b>Alto!</b> - Por favor ingresa una palabra para buscar proveedores.</span
		>
	<!--   Core JS Files   -->
	<script src="{{ asset('/js/jquery.min.js') }}"></script>
	<script src="{{ asset('/js/popper.min.js') }}"></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/js/perfect-scrollbar.jquery.min.js') }}"></script>
	<!-- Chart JS -->
	{{-- <script src="{{ asset('/js/plugins/chartjs.min.js') }}"></script> --}}
	<!--  Notifications Plugin    -->
	<script src="{{ asset('/js/bootstrap-notify.js') }}"></script>
	<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
	<script src="{{ asset('/js/paper-dashboard.min.js?v=2.0.1') }}" type="text/javascript"></script>
	<script src="{{ asset('/js/awesomplete.js') }}" type="text/javascript"></script>
	<script>
		$(function(){});
		window.addEventListener('load', function() {
			$('.loader').addClass('hide');
			setTimeout(function() {
				$('.loader').remove();
			}, 550)
		});
		function searchSubmit(e){
			console.log(document.getElementById('searchOccupationInput').value === '');
			if(document.getElementById('searchOccupationInput').value === ''){
				event.preventDefault();
				$.notify({
					title: '<strong>Espera!</strong>',
					message: 'Por favor ingresa algo qué buscar en la barra de búsqueda.'
				},{
					type: 'danger'
				});
				return false;
			}
		}

	</script>
	<script src="{{ asset('/js/demo.js') }}"></script>
	@stack('scripts')
	
</body>

</html>
