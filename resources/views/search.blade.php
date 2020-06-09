@extends('layouts.principal')

@section('title', 'Inicio')
@section('content')
<div id="map"></div>
<style>
	#map {
		width: 100%;	
		height: 85vh;
	}
	.main-panel{
		overflow: hidden;
	}
</style>
@push('scripts')
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDO2xDP3J9UNvVoox2xomZIcnV61b73XGA&callback=initMap" type="text/javascript"></script>
<script>
	function initMap() {
		var uluru = {lat: 19.419944, lng: -99.1388957};
		var map = new google.maps.Map(document.getElementById('map'), {zoom: 11, center: uluru});
		// infoWindow = new google.maps.InfoWindow;

		// Try HTML5 geolocation.
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(function(position) {
				var pos = {
					lat: position.coords.latitude,
					lng: position.coords.longitude
				};

				// infoWindow.setPosition(pos);
				// infoWindow.setContent('Location found.');
				// infoWindow.open(map);
				map.setCenter(pos);
				map.setZoom(14);
			}, function() {
				handleLocationError(true, infoWindow, map.getCenter());
			});
		} else {
		  // Browser doesn't support Geolocation
		  handleLocationError(false, infoWindow, map.getCenter());
		}
	}
	function handleLocationError(browserHasGeolocation, infoWindow, pos) {
		infoWindow.setPosition(pos);
		infoWindow.setContent(browserHasGeolocation ?
			'Error: The Geolocation service failed.' :
			'Error: Your browser doesn\'t support geolocation.');
		infoWindow.open(map);
	}
</script>
@endpush
@endsection