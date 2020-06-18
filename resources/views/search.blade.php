@extends('layouts.principal')

@section('title', 'Buscar proveedores')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card border">
			<div class="card-header ">
				<h5 class="card-title">Proveedores</h5>
				<p class="card-category">HeyJobs</p>
			</div>
			<div class="card-body">
				<div class="container-fluid gedf-wrapper">
					<div class="row">
						<div class="col-md-8 gedf-main">
						@if(count($found_providers ?? []))	
						@foreach ($found_providers as $provider)
						<div class="card gedf-card">
							<div class="card-header">
								<div class="d-flex justify-content-between align-items-center">
									<div class="d-flex justify-content-between align-items-center">
										<div class="mr-2">
											<img class="rounded-circle" width="45" src="{{ asset("/img/profileImages/{$provider->image}") }}" alt="">
										</div>
										<div class="ml-2">
											<div class="h5 m-0"></div>
											<div class="h7 text-muted"><a href="{{ route('show_provider') . "/?provider_id={$provider->id}" }}">{{$provider->name}}</a></div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> Afiliad@ Desde {{new Carbon\Carbon($provider->created_at)}}</div>
								<span class="card-link" href="#">
									<h5 class="card-title text-primary">{{ $provider->name }}</h5>
								</span>
								<p class="card-text">
									{{ $provider->intro }}
								</p>
							</div>
							<div class="card-footer">
								<div class="col-6">
									<a href="{{ route('show_provider') . "/?provider_id={$provider->id}" }}" class="card-link"><i class="nc-icon nc-alert-circle-i"></i> Detalles</a>
								</div>
								<div class="col-6">
									<a href="#0" class="card-link"><i class="nc-icon nc-chat-33"></i> Hubo un problema</a>
								</div>
								{{-- <a href="#" class="card-link"><i class="nc-icon nc-simple-remove"></i> Cancelar contratación</a> --}}
							</div>
						</div>
						@endforeach
						@else
						No se detecta una búsqueda,
						Busca a los proveedores en la barra de búsqueda <i class="nc-icon nc-zoom-split" style="color: #ef8157"></i>
						@endif
					</div>
					<div class="col-md-4">
						<div class="card gedf-card">
							<div class="card-body">
								<h5 class="card-title">Ayúdanos a ayudarte</h5>
								<h6 class="card-subtitle mb-2 text-muted">¿Cómo ser parte de la comunidad?</h6>
								<p class="card-text">
									Permítenos darte algunas recomendaciones para que nuestra comunidad
									sea siempre la mejor opción para tí.
								</p>
								<a href="#0" class="card-link">Preguntas frecuentes</a>
								<a href="#0" class="card-link">Cláusulas</a>
							</div>
						</div>
						<div class="card gedf-card">
							<div class="card-body">
								<h5 class="card-title">¿No encuentras un proveedor?</h5>
								<h6 class="card-subtitle mb-2 text-muted">Esta información te puede servir</h6>
								<p class="card-text">
									Es probable que en la comunidad aún no se encuentre el proveedor que buscas
									Dínos qué buscas y te notificaremos por correo con algún posbile nuevo proveedor
								</p>
								{{-- <a href="#0" class="card-link">Card link</a> --}}
								<input type="text" class="form-control">
								<a href="#0" class="card-link">Enviar</a>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>
<script type="text/javascript">
	function like(element){
		if(element.style.color === '')
			element.style.color = '#ef8157';
		else
			element.style.color = '';
	}
</script>
@endsection
