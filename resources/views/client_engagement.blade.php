@extends('layouts.principal')

@section('title', 'Contratos')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card border">
			<div class="card-header ">
				<h5 class="card-title">Contratos</h5>
				<p class="card-category">HeyJobs</p>
			</div>
			<div class="card-body">
				<div class="container-fluid gedf-wrapper">
					<div class="row">
						<div class="col-md-8 gedf-main">
							
						{{-- @foreach ($posts as $post) --}}
						<div class="card gedf-card">
							<div class="card-header">
								<div class="d-flex justify-content-between align-items-center">
									<div class="d-flex justify-content-between align-items-center">
										<div class="mr-2">
											<img class="rounded-circle" width="45" src="{{ asset('/img/default-avatar.png') }}" alt="">
										</div>
										<div class="ml-2">
											<div class="h5 m-0"></div>
											<div class="h7 text-muted">{{-- {{$post->provider->name}} --}}</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>{{-- {{new Carbon\Carbon($post->created_at)}} --}}</div>
								<span class="card-link" href="#">
									<h5 class="card-title text-primary">{{-- {{ $post->title }} --}}</h5>
								</span>
								<p class="card-text">
									{{-- {{ $post->content }} --}}
								</p>
							</div>
							<div class="card-footer">
								<a href="#0" class="card-link" onclick="like(this)"><i class="nc-icon nc-alert-circle-i"></i> Detalles</a>
								<a href="#" class="card-link"><i class="nc-icon nc-chat-33"></i> Hubo un problema</a>
								<a href="#" class="card-link"><i class="nc-icon nc-simple-remove"></i> Cancelar contratación</a>
							</div>
						</div>
						{{-- @endforeach --}}
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
		<br>
		<div class="card border">
			<div class="card-header ">
				<h5 class="card-title">Historial del contrataciones</h5>
				<p class="card-category">HeyJobs</p>
			</div>
			<div class="card-body">
				<div class="container-fluid gedf-wrapper">
					<div class="row">
						<div class="col-md-8 gedf-main">
							@if(auth()->user()->getTable() === 'providers')
							<!--- \\\\\\\Post-->
							<div class="card gedf-card">
								<div class="card-header">
									<ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">
												Haz una publicación
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Imagen</a>
										</li>
									</ul>
								</div>
								<div class="card-body">
									<form action="{{ route('new_post') }}" method="post">
										@csrf	
										<div class="tab-content" id="myTabContent">
											<div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
												
													<div class="form-group">
														<label class="sr-only" for="message">post</label>
														<input type="text" name="title" class="form-control" placeholder="Elije un título...">
														<textarea class="form-control" id="message" rows="3" placeholder="¿Qué quieres promocionar?" name="content"></textarea>
													</div>

											</div>
											<div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
												<div class="form-group">
													<div class="custom-file">
														<input type="file" class="custom-file-input" id="customFile">
														<label class="custom-file-label" for="customFile">Subir imágen</label>
													</div>
												</div>
												<div class="py-4"></div>
											</div>
										</div>
										<div class="btn-toolbar justify-content-between">
											<div class="btn-group">
												<button type="submit" class="btn btn-primary">Compartir</button>
											</div>
											{{-- <div class="btn-group">
												<button id="btnGroupDrop1" type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="fa fa-globe"></i>
												</button>
												<div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
													<a class="dropdown-item" href="#"><i class="fa fa-globe"></i> Public</a>
													<a class="dropdown-item" href="#"><i class="fa fa-users"></i> Friends</a>
													<a class="dropdown-item" href="#"><i class="fa fa-user"></i> Just me</a>
												</div>
											</div> --}}
										</div>
									</form>

								</div>
							</div>
							@endif
						<!-- Post /////-->
						
						{{-- @foreach ($posts as $post) --}}
						<div class="card gedf-card">
							<div class="card-header">
								<div class="d-flex justify-content-between align-items-center">
									<div class="d-flex justify-content-between align-items-center">
										<div class="mr-2">
											<img class="rounded-circle" width="45" src="{{ asset('/img/default-avatar.png') }}" alt="">
										</div>
										<div class="ml-2">
											<div class="h5 m-0"></div>
											<div class="h7 text-muted">{{-- {{$post->provider->name}} --}}</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>{{-- {{new Carbon\Carbon($post->created_at)}} --}}</div>
								<span class="card-link" href="#">
									<h5 class="card-title text-primary">{{-- {{ $post->title }} --}}</h5>
								</span>
								<p class="card-text">
									{{-- {{ $post->content }} --}}
								</p>
							</div>
							{{-- <div class="card-footer">
								<a href="#0" class="card-link" onclick="like(this)"><i class="fa fa-gittip"></i> Like</a>
								<a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
								<a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
							</div> --}}
						</div>
						{{-- @endforeach --}}
					</div>
					<div class="col-md-4">
						<div class="card gedf-card">
							<div class="card-body">
								<h5 class="card-title">¿Hay algo en específico que estés buscando?</h5>
								{{-- <h6 class="card-subtitle mb-2 text-muted">¿Cómo ser parte de la comunidad?</h6> --}}
								<p class="card-text">
									Quizá contactarte con nostros te ayude.
								</p>
								<a href="#0" class="card-link">Preguntas frecuentes</a>
								<a href="#0" class="card-link">Cláusulas</a>
							</div>
						</div>
						<div class="card gedf-card">
							<div class="card-body">
								<h5 class="card-title">¿Tuviste problemas con tu proveedor?</h5>
								<h6 class="card-subtitle mb-2 text-muted">Cuéntanos todo!</h6>
								<p class="card-text">
									Para que podamos atenderte, por favor contáctanos
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
