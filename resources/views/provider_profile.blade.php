@extends('layouts.principal')

@section('title', "Proveedor - " . isset($provider) ?? 'Error')
@section('content')
@if($provider ?? false)
<div class="content">
	<div class="row">
		<div class="col-md-4">
			<div class="card card-user">
				<div class="image">
					<img src="{{ asset('/img/damir-bosnjak.jpg') }}" alt="...">
				</div>
				<div class="card-body">
					<div class="author">
						<a href="#">
							<img class="avatar border-gray" src="{{ asset('/img/default-avatar.png') }}" alt="Profile Image">
							<h5 class="title">{{$provider->name}}</h5>
						</a>
						<h5 class=" text-primary">Email</h5>
						<p> {{$provider->email}} </p>
						<h5 class=" text-primary">Teléfono</h5>
						<p> {{$provider->phone}} </p>
					</div>
					<p class="description text-center text-dark">
						{{$provider->occupation[0]->slug}}
					</p>
				</div>
				<div class="card-footer">
					<hr>
					<div class="button-container">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-6 ml-auto">
								<h5>{{$provider->engagements->count()}}<br><small>Total de contratos</small></h5>
							</div>
							<div class="col-lg-6 mr-auto">
								<h5>{{$provider->engagements->count()}}<br><small>Contratos con éxito</small></h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Horario de trabajo</h4>
				</div>
				<div class="card-body">
					<div class="col-md-12">
						<table class="table hover mx-auto">

							<thead>
								<tr>
									<th></th>
									<th class=" text-primary">Inicio</th>
									<th class=" text-primary">Fin</th>
								</tr>
								@foreach ($provider->working_schedule as $day => $content)
								@if ($day == 'Emergency') @continue @endif
								<tr>
									<th class=" text-primary">{{$content["slug"]}}</th>
									<td>{{$content["start"]}}</td>
									<td>{{$content["end"]}}</td>
								</tr>
								@endforeach
								<tr>
									<th class=" text-primary">Emergencias: </th>
									<td>{{ last($provider->working_schedule) == 'Yes' ? "Si":"No" }}</td>
								</tr>
							</thead>
						</table>
					</div>	
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card card-user">
				<div class="card-header">
					<h5 class="card-title">Información</h5>
				</div>
				<div class="card-body text-center">
						<div class="row">
							<div class="col-md-12">
								<h3 class="text-primary">Introducción del proveedor</h3>
								<p>{{$provider->intro}}</p>
								<hr>
							</div>	
						</div>
						<div class="row">
							<div class="col-md-12">
								<h3 class=" text-primary">Ocupación profesional</h3>
								<p> {{$provider->professional ? "Si":"No"}} </p>
								<hr>
							</div>	
						</div>
						<div class="row">
							<div class="col-md-12">
								<h3 class=" text-primary">Movilidad</h3>
								<p> {{$provider->mobility ? "Si":"No"}} </p>
								<hr>
							</div>	
						</div>
						<div class="row">
							<div class="col-md-12">
								<h3 class=" text-primary">Servicio a domicilio</h3>
								<p> {{$provider->home_service ? "Si":"No"}} </p>
								<hr>
							</div>	
						</div>
						<form action="{{ route('request_contract') }}" method="post">
							@csrf
							<input type="hidden" name="provider_id" value="{{$provider->id}}" >
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label><h3>Solicitar contrato/acuerdo</h3></label>
										<textarea name="request" class="form-control textarea" placeholder="Explica el servicio que requieres..."></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="update ml-auto mr-auto">
									<button type="submit" class="btn btn-primary btn-round">Solcitar servicio</button>
								</div>
							</div>
						</form>
				</div>
			</div>
		</div>
	</div>
</div>
@else
<h3>Hubo un error. <a href="{{ route('home') }}">Haz click aquí para regresar a home <i class="nc-icon nc-bank"></i></a></h3>
@endif
@endsection