@extends('layouts.principal')

@section('title', "Tablero de Contratos")
@section('content')
@if (isset($engagements))
<div class="row">
	<div class="col-md-3 col-lg-3 col-sm-12 rounded-lg" style="overflow: scroll;max-height: 85vh;padding: 20px 10px; background-color: #51bcda4f">
		@foreach ($engagements as $engagement)
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card card-stats engagement-card" data-engagementId="{{$engagement->id}}">
					<div class="card-body ">
						<div class="row">
							<div class="col-5 col-md-4">
								<div class="icon-big text-center icon-warning">
									<i class="nc-icon
									@switch($engagement->state)
									@case('requested')
									nc-watch-time
									@break
									@case('in_process')
									nc-button-play
									@break
									@case('accepted')
									nc-minimal-up
									@break
									@case('executing')
									nc-refresh-69
									@break
									@case('finished')
									nc-minimal-right
									@break
									@case('waiting_for_payment')
									nc-money-coins
									@break
									@case('waiting_for_prepayment')
									nc-money-coins
									@break
									@case('done')
									nc-check-2
									@break
									@case('suspended')
									nc-simple-delete
									@break
									@case('cancelled')
									nc-simple-remove
									@break
									@endswitch
									text-primary"></i>
								</div>
							</div>
							<div class="col-7 col-md-8">
								<div class="numbers">
									<p class="card-category">{{$engagement->user->name}}</p>
									<p class="card-title" style = "text-transform:capitalize;font-size: 0.6em">
										@lang("custom.engagemet_states.$engagement->state")
									</p>
									<p>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer ">
						<hr>
						<div class="stats">
							<i class="fa fa-calendar-o"></i>
							Fecha de solicitud: {{ new Carbon\Carbon($engagement->created_at) }}
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	<div class="col-md-8 col-lg-8 col-sm-12">
		<div class="card ">
			<div class="card-header ">
				<h5 class="card-title">Ticket de contrato</h5>
				<p class="card-category">A continuación toda la información la solicitud</p>
			</div>
			@if(isset($engagement))
			<div class="card-body ">
				<div class="text-muted h7 mb-2">
					<i class="fa fa-clock-o"></i>
					Fecha de creación: {{new Carbon\Carbon($engagement->created_at)}}
				</div>
				<h6 class="card-title text-primary">Estado</h6>
				<p>
					Actual: <span class="text-primary">@lang("custom.engagemet_states.$selected_engagement->state")</span><br>
					<h6>Para cambiar estado haz clic en algún botón:</h6> <br>
					@foreach (__("custom.engagemet_states") as $key => $state)
					@if($key === $selected_engagement->state) @continue @endif
						<a href="{{ route('change_engagement_state')."/?engagement_id=$selected_engagement->id&state=$key"}}" class="btn btn-sm btn-info">{{$state}}</a>
					@endforeach
				</p>
				<hr>
				@if ($message = Session::get('info'))
				<div class="alert alert-secondary alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>{{ $message }}</strong>
				</div>
				@endif
				@if ($message = Session::get('success'))
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>{{ $message }}</strong>
					</div>
				@endif
				@if($errors->any())
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<ul>
						@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				<p class="text-success text-muted" style="text-decoration: underline;">Para cambiar esta información, haz clic en el botón "cambiar información"</p>
				<form action="{{ route('change_engagement_info') }}" method="post">
					@csrf
					<input name="engagement_id" type="hidden" value="{{$engagement->id}}"></input>
					<h6 class="card-title text-primary">Solicitud</h6>
					<textarea name="request" id="request" cols="30" rows="5" class="w-100" maxlength="200">
						{{ $engagement->request }}
					</textarea>
					<hr>
					<h6 class="card-title text-primary">Concepto</h6>
					<input name="concept" type="text" value="{{ $engagement->concept }}" class="w-100">
					<hr>
					<h6 class="card-title text-primary">Descripción</h6>
					<textarea name="description" id="description" cols="30" rows="5" class="w-100" maxlength="200">
						{{ $engagement->description }}
					</textarea>
					<hr>
					<h6 class="card-title text-primary">Prepago: </h6>
					<input name="prepayment" type="number" value="{{ $engagement->prepayment }}" class="w-100">
					<hr>
					<h6 class="card-title text-primary">Fecha estimada de término</h6>
					<input name="estimated_completion_date" data-toggle="datepicker" class="w-50" value="@php $d = new Carbon\Carbon($engagement->estimated_completion_date);$d->settings(['toStringFormat' => 'm/d/y',]); @endphp {{$d}}">
					<div data-toggle="datepicker"></div>
					<hr>
					<input type="submit" class="btn btn-lg btn-primary mx-auto d-block" value="Cambiar información">
				</form>

			</div>
			<div class="card-footer ">
				<hr>
				<div class="stats">
					<i class="fa fa-history"></i> Fecha de creación: {{new Carbon\Carbon($selected_engagement->created_at)}}
				</div>
			</div>
			@endif
		</div>
	</div>
</div>
@else
<div class="text-center rounded-lg border bg-white">
	<img src="{{ asset('/img/No-records-to-display.png') }}" alt="No hay información">
	<h5 class="text-primary">Aún no tienes registros para mostrar</h5>
	<br>
	<a href="{{ route('home_providers') }}" class="btn btn-lg btn-primary">Ir a Home <i class="nc-icon nc-bank"></i></a>
</div>

@endif
<style>
	.engagement-card:hover{
		cursor:pointer;
		background: #dee2e6;
		color: #fff;
	}
</style>
@push('scripts')
<link  href="{{ asset('/css/datepicker.min.css') }}" rel="stylesheet">
<script src="{{ asset('/js/datepicker.min.js') }}"></script>
<script>
	$(document).on('click', '.engagement-card', function(e) {
		e.preventDefault();
		window.location = "{{ route('engagements_dashboard') }}?engagement_id=" + $(this).attr('data-engagementId');
	});
	let today = new Date();
	$('[data-toggle="datepicker"]').datepicker({
		date: today,
		startDate: today,
		// setDate: 
	});
</script>
@endpush
@endsection