@extends('layouts.principal')

@section('title', 'Inicio')
<div id="gmap" class=""></div>
<script>
	var STATE_SELECT = 33;
@push('scripts')
$(document).ready(function ($) {
    var maplace = null;
    for (var tienda = 0; tienda < LocsTiendas.length; tienda++) {
        LocsTiendas[tienda].html = '<div class="map-info text-center"><h3>Santory ' + LocsTiendas[tienda].title + '</h3><span>' + LocsTiendas[tienda].address + '</span><br><br><a class="text-right inverse" target="_blank" href="http://maps.google.com/maps?q=' + LocsTiendas[tienda].lat + ',' + LocsTiendas[tienda].lon + '">Ver en Google Maps</a></div>';
        LocsTiendas[tienda].icon = 'images/marker.png';
        LocsTiendas[tienda].zoom = 19;
        LocsTiendas[tienda].animation = google.maps.Animation.DROP;
    }

    var LOCS_CURRENT = LocsTiendas;

	var theme_array = [{"stylers":[{"hue":"#F15AA9"},{"invert_lightness":false},{"saturation":50},{"lightness":30},{"gamma":0.5}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#a4def9"}]}];
	
    var template_menu = "<option value='33'>Todas</option>";
   
    for (var estado = 0; estado < LocsEstados.length; estado++){
        template_menu += '<option value="' + LocsEstados[estado].id + '">' + LocsEstados[estado].title + '</option>';
    }
    $('#gmap-menu-states').html(template_menu);

    $('#gmap-menu-states').change(function (e) {
        var new_locations = [];
        var lat = 0;
        var lon = 0;
        var zoom = 0;
        STATE_SELECT = $(this).val();

        if (STATE_SELECT == 33) {
            $(".map-menu-container .map-menu").slideUp("slow", function () {
                $('.map-menu-item').removeClass('hidden');
                maplace.Load({ locations: LOCS_CURRENT, map_options: { styles: theme_array, set_center: [23.8218702, -102.0960129], zoom: 5, scrollwheel: false } });
                $(this).slideDown("slow", function () {
                    ShowSocialMedia()
                });
            });
        } else {
            $(".map-menu-container .map-menu").slideUp("slow", function () {
                var items = '.map-menu-item[data-map-state="' + STATE_SELECT + '"]';
                var loc_temp = [];
                $(items).removeClass('hidden');
                $('.map-menu-item').not('[data-map-state="' + STATE_SELECT + '"]').addClass('hidden');
                $.each($(items), function () {
                    var data_temp = {
                        lat: $(this).attr('data-map-lat'),
                        lon: $(this).attr('data-map-lon'),
                        title: $(this).attr('data-map-title'),
                        id_state: $(this).attr('data-map-state'),
                        address: $(this).attr('data-map-address'),
                        html: '<div class="map-info text-center"><h3>Santory ' + $(this).attr('data-map-title') + '</h3><span>' + $(this).attr('data-map-address') + '</span><br><br><a class="text-right inverse" target="_blank" href="http://maps.google.com/maps?q=' + $(this).attr('data-map-lat') + ',' + $(this).attr('data-map-lon') + '">Ver en Google Maps</a></div>',
                        icon: 'images/marker.png',
                        zoom: 19,
                        animation: google.maps.Animation.DROP
                    };
                    loc_temp.push(data_temp);
                });

                for (var i = 0; i < LocsEstados.length; i++) {
                    if (LocsEstados[i].id == STATE_SELECT) {
                        lat = LocsEstados[i].lat;
                        lon = LocsEstados[i].lon;
                        zoom = LocsEstados[i].zoom;
                        break;
                    }
                }

                if (loc_temp.length == 1) {
                    maplace.Load({ locations: loc_temp });
                    maplace.ViewOnMap(1);
                } else {
                    maplace.Load({ locations: loc_temp, map_options: { styles: theme_array, set_center: [lat, lon], zoom: zoom, scrollwheel: false } });
                }

                $(this).slideDown("slow", function () {
                    ShowSocialMedia();
                });
            });
        }
    });

    BuildMenuTiendas = function () {        
        var template_menu = "";
        var count_state = 1;
        var current_state = 1;
        var old_state = 1;
        for (var tienda = 0; tienda < LOCS_CURRENT.length; tienda++) {            
            current_state = LOCS_CURRENT[tienda].id_state;
            if (current_state != old_state) count_state = 1;
            template_menu += '<a href="#" class="map-menu-item" data-map-index-general="' + (tienda + 1) + '" ';
            template_menu += 'data-map-index-state="' + count_state + '" ';
            template_menu += 'data-map-title="' + LOCS_CURRENT[tienda].title + '" ';
            template_menu += 'data-map-lon="' + LOCS_CURRENT[tienda].lon + '" ';
            template_menu += 'data-map-lat="' + LOCS_CURRENT[tienda].lat + '" ';
            template_menu += 'data-map-address="' + LOCS_CURRENT[tienda].address + '" ';
            template_menu += 'data-map-state="' + LOCS_CURRENT[tienda].id_state + '" ';
            template_menu += '>' + LOCS_CURRENT[tienda].title + '</a>';
            old_state = LOCS_CURRENT[tienda].id_state;
            count_state++;            
        }
        
        $('.map-menu-container .map-menu').html(template_menu);

        $("a.map-menu-item").click(function (event) {
            var index = null;
            if (STATE_SELECT == 33) {
                index = $(this).attr('data-map-index-general');            
            } else {
                index = $(this).attr('data-map-index-state');
            }
            maplace.ViewOnMap(index);
            event.preventDefault();
        });
    }

    BuildMenuTiendas();
	
	maplace = new Maplace({
	    locations: LOCS_CURRENT,
	    generate_controls: true,
	    force_generate_controls: true,
	    controls_type: 'dropdown',
	    controls_title: 'Elegir tienda:',
		view_all_text: "Visualizar todas",
		map_options: {styles: theme_array, set_center: [23.8218702, -102.0960129],zoom:5,scrollwheel: false},
		mapTypeId: google.maps.MapTypeId.ROADMAP,
	}).Load();
	
	SetSideButton();
	ShowSocialMedia();
});

var MAPA_MENUOPEN = true;

function SetSideButton() {
    var SideButton = "<div class='side-button'><i class='glyphicon fa fa-caret-left'></i></div>";
    var MenuContainer = $('.map-menu-container');
    MenuContainer.append(SideButton);
    SideButton = $('.map-menu-container .side-button');
    var ButtonH = SideButton.height();
    var ButtonW = SideButton.width();
    var MenuH = MenuContainer.height();
    var MenuW = MenuContainer.width() + 15;

    var cssPropertiesOpen = { left: '0px' }
    var cssPropertiesClose = { left: '-' + MenuW + 'px' }

    SideButton.click(function () {
        if (MAPA_MENUOPEN) {
            $('.map-menu-container').animate(cssPropertiesClose);
            SideButton.addClass('cerrado');
            $('.map-menu-container .side-button i').removeClass('fa-caret-left');
            $('.map-menu-container .side-button i').addClass('fa-caret-right');
            MAPA_MENUOPEN = false;
        } else {
            $('.map-menu-container').animate(cssPropertiesOpen);
            SideButton.removeClass('cerrado');
            $('.map-menu-container .side-button i').removeClass('fa-caret-right');
            $('.map-menu-container .side-button i').addClass('fa-caret-left');
            MAPA_MENUOPEN = true;
        }
        ShowSocialMedia();
    });
}

function ShowSocialMedia() {
    var position = 360;
    var diference = 32;
    var max_space = 320;
    var menu_height = $('.map-menu-container').height() + diference;
    var space = $(window).height() - (menu_height + position);

    if (MAPA_MENUOPEN) {
        if (space >= max_space) {
            $('.bar-socialmedia').removeClass('hidden');
            $('.bar-socialmedia').removeClass('fadeOutLeft');
            $('.bar-socialmedia').addClass('fadeInLeft');
        } else {
            $('.bar-socialmedia').removeClass('fadeInLeft');
            $('.bar-socialmedia').addClass('fadeOutLeft');
        }
    } else {
        $('.bar-socialmedia').removeClass('hidden');
        $('.bar-socialmedia').removeClass('fadeOutLeft');
        $('.bar-socialmedia').addClass('fadeInLeft');
    }
}
</script>
@endpush
@endsection