@extends('layouts.principal')

@section('title', 'Inicio')
@section('content')
<input id="pac-input" class="controls form-control" type="text" placeholder="Busque aquí">
<div id="map"></div>
<style>
	#map {
		width: 100%;	
		height: 85vh;
	}
	.main-panel{
		overflow: hidden;
	}

	#description {
		font-family: Roboto;
		font-size: 15px;
		font-weight: 300;
	}

	#infowindow-content .title {
		font-weight: bold;
	}

	#infowindow-content {
		display: none;
	}

	#map #infowindow-content {
		display: inline;
	}

	.pac-card {
		margin: 10px 10px 0 0;
		border-radius: 2px 0 0 2px;
		box-sizing: border-box;
		-moz-box-sizing: border-box;
		outline: none;
		box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
		background-color: #fff;
		font-family: Roboto;
	}

	#pac-container {
		padding-bottom: 12px;
		margin-right: 12px;
	}

	.pac-controls {
		display: inline-block;
		padding: 5px 11px;
	}

	.pac-controls label {
		font-family: Roboto;
		font-size: 13px;
		font-weight: 300;
	}

	#pac-input {
		background-color: #fff;
		font-family: Roboto;
		font-size: 15px;
		font-weight: 300;
		margin-left: 12px;
		padding: 0 11px 0 13px;
		text-overflow: ellipsis;
		width: 400px;
	}

	#pac-input:focus {
		border-color: #4d90fe;
	}

	#title {
		color: #fff;
		background-color: #4d90fe;
		font-size: 25px;
		font-weight: 500;
		padding: 6px 12px;
	}
	#target {
		width: 345px;
	}
</style>
@push('scripts')
<script>
	function initMap() {
		var cdmx = {lat: 19.419944, lng: -99.1388957};
		var map = new google.maps.Map(document.getElementById('map'), {zoom: 11, center: cdmx, mapTypeId: 'roadmap'});
		infoWindow = new google.maps.InfoWindow;
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
		 // Create the search box and link it to the UI element.
		 var input = document.getElementById('pac-input');
		 var searchBox = new google.maps.places.SearchBox(input);
		 map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
		// Bias the SearchBox results towards current map's viewport.
		map.addListener('bounds_changed', function() {
			searchBox.setBounds(map.getBounds());
		});

		var markers = [];
		// Listen for the event fired when the user selects a prediction and retrieve
		// more details for that place.
		searchBox.addListener('places_changed', function() {
			var places = searchBox.getPlaces();

			if (places.length == 0) {
				return;
			}

		  // Clear out the old markers.
		  markers.forEach(function(marker) {
			marker.setMap(null);
		  });
		  markers = [];

		  // For each place, get the icon, name and location.
		  var bounds = new google.maps.LatLngBounds();
		  places.forEach(function(place) {
			if (!place.geometry) {
				console.log("Returned place contains no geometry");
				return;
			}
			var icon = {
				url: place.icon,
				size: new google.maps.Size(71, 71),
				origin: new google.maps.Point(0, 0),
				anchor: new google.maps.Point(17, 34),
				scaledSize: new google.maps.Size(25, 25)
			};

			// Create a marker for each place.
			markers.push(new google.maps.Marker({
				map: map,
				icon: icon,
				title: place.name,
				position: place.geometry.location
			}));

			if (place.geometry.viewport) {
			  // Only geocodes have viewport.
			  bounds.union(place.geometry.viewport);
		  } else {
			bounds.extend(place.geometry.location);
		  }
	  });
		  map.fitBounds(bounds);
	  });
	}
	function handleLocationError(browserHasGeolocation, infoWindow, pos) {
		infoWindow.setPosition(pos);
		infoWindow.setContent(browserHasGeolocation ?
			'Error: The Geolocation service failed.' :
			'Error: Your browser doesn\'t support geolocation.');
		infoWindow.open(map);
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDO2xDP3J9UNvVoox2xomZIcnV61b73XGA&callback=initMap&libraries=places" type="text/javascript" async defer></script>
@endpush
@endsection