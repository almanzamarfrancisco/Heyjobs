@extends('layouts.principal')

@section('title', 'Contratos')
@section('content')
<div class="row">
	<div class="col-12 text-center bg-white rounded-lg">
		<img src="{{ asset('/img/gracias.jpg') }}" alt="Gracias" class="mx-auto">
		<h2 class="text-primary">
			Gracias por tu preferencia,
			la solicitud se ha enviado al proveedor,
			pronto se pondrá en contacto contigo. 
			<br>
			<a href="{{ route('home') }}" class="btn btn-lg btn-primary">Ir a Home <i class="nc-icon nc-bank"></i></a>
		</h2>
	</div>
</div>
@endsection