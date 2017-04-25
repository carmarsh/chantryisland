(function(){
  var styledMapType = new google.maps.StyledMapType(
    [
      {elementType: 'geometry', stylers: [{color: '#f5f5f5'}]},
      {elementType: 'labels.text.fill', stylers: [{color: '#616161'}]},
      {elementType: 'labels.text.stroke', stylers: [{color: '#f5f5f5'}]},
      {
        featureType: 'administrative',
        elementType: 'geometry.stroke',
        stylers: [{color: '#f5f5f5'}]
      },
      {
        featureType: 'administrative.land_parcel',
        elementType: 'labels', 'stylers': [{"visibility": "off"}]
      },
      {
        featureType: 'administrative.land_parcel',
        elementType: 'labels.text.fill',
        stylers: [{color: '#616161'}]
      },
      {
        featureType: 'landscape.natural',
        elementType: 'geometry',
        stylers: [{color: '#efefef'}]
      },
      {
        featureType: 'poi',
        elementType: 'geometry',
        stylers: [{color: '#11132e'}]
      },
      {
        featureType: 'poi',
        elementType: 'labels.text.fill',
        stylers: [{color: '#616161'}]
      },
      {
        featureType: 'poi.park',
        elementType: 'geometry.fill',
        stylers: [{color: '#e5e5e5'}]
      },
      {
        featureType: 'poi.park',
        elementType: 'labels.text.fill',
        stylers: [{color: '#616161'}]
      },
      {
        featureType: 'road',
        elementType: 'geometry',
        stylers: [{color: '#c72026'}]
      },
      {
        featureType: 'road.arterial',
        elementType: 'geometry',
        stylers: [{color: '#c72026'}]
      },
      {
        featureType: 'road.highway',
        elementType: 'geometry',
        stylers: [{color: '#c72026'}]
      },
      {
        featureType: 'road.highway',
        elementType: 'geometry.stroke',
        stylers: [{color: '#c72026'}]
      },
      {
        featureType: 'road.highway.controlled_access',
        elementType: 'geometry',
        stylers: [{color: '#11132e'}]
      },
      {
        featureType: 'road.highway.controlled_access',
        elementType: 'geometry.stroke',
        stylers: [{color: '#11132e'}]
      },
      {
        featureType: 'road.local',
        elementType: 'labels.text.fill',
        stylers: [{color: '#616161'}]
      },
      {
        featureType: 'transit.line',
        elementType: 'geometry',
        stylers: [{color: '#c72026'}]
      },
      {
        featureType: 'transit.line',
        elementType: 'labels.text.fill',
        stylers: [{color: '#c72026'}]
      },
      {
        featureType: 'transit.line',
        elementType: 'labels.text.stroke',
        stylers: [{color: '#c72026'}]
      },
      {
        featureType: 'transit.station',
        elementType: 'geometry',
        stylers: [{color: '#c72026'}]
      },
      {
        featureType: 'water',
        elementType: 'geometry.fill',
        stylers: [{color: '#d2d5d3'}]
      },
      {
        featureType: 'water',
        elementType: 'labels.text.fill',
        stylers: [{color: '#9e9e9e'}]
      }
    ],
    {name: 'Styled Map'}),


  customMarker = {
    path: "M8.5,0.5C5.5,0.5,3,3,3,6c0,4.4,4.9,10.1,5.1,10.3l0.4,0.4l0.4-0.4C9.1,16.1,14,10.4,14,6C14,3,11.5,0.5,8.5,0.5z M8.5,9.1c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S10.2,9.1,8.5,9.1z",
  fillColor: '#11132E',
  fillOpacity: 1,
  scale: 1.8,
  strokeColor: '#FFFFFF',
  strokeWeight: 1
    },

    customA = {
      path: "M8.5,0.5C5.5,0.5,3,3,3,6c0,4.4,4.9,10.1,5.1,10.3l0.4,0.4l0.4-0.4C9.1,16.1,14,10.4,14,6C14,3,11.5,0.5,8.5,0.5z M8.5,9.1c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S10.2,9.1,8.5,9.1z",
    fillColor: '#11132E',
    fillOpacity: 1,
    scale: 1.8,
    strokeColor: '#FFFFFF',
    strokeWeight: 1
    },

    customB = {
      path: "M91,0C40.8,0,0,40.7,0,91c0,50.2,40.7,91,91,91c50.2,0,91-40.7,91-91S141.3,0,91,0z M90.9,127.7c0,0.8-0.6,1.5-1.5,1.5l-28.7,0.9l0,0l0,0l0,0l0,0l-19.5-0.6c-0.8,0-1.5-0.7-1.5-1.5v-17.1c0-0.2,0-0.4,0.1-0.5l0,0c0.1-0.2,0.2-0.3,0.3-0.5l0,0l10-10.4l0,0c0.3-0.3,0.7-0.5,1.1-0.4l29.3,0.5l0,0l0,0c0.2,0,0.4,0.1,0.5,0.1l0,0c0.2,0.1,0.3,0.2,0.4,0.3l0,0l9,9.9c0.2,0.3,0.4,0.6,0.4,1c0,0,0,0,0,0.1v16.7H90.9zM136.1,129.4c-0.3,0.3-0.7,0.5-1.1,0.5H99.6c-0.4,0-0.8-0.2-1.1-0.5s-0.4-0.8-0.4-1.2l7.4-59.8v-6h-2.6c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5h2.6v-4.1h-4.3c-0.6,0-1.2-0.4-1.4-1s0-1.3,0.5-1.7l15.9-12.7c0.6-0.5,1.4-0.4,1.9,0l14.7,12.7c0.5,0.4,0.6,1.1,0.4,1.7s-0.8,1-1.4,1h-3.1v4.1h1.6c0.8,0,1.5,0.7,1.5,1.5s-0.7,1.5-1.5,1.5h-1.6v5.5l7.7,60.2C136.5,128.6,136.3,129.1,136.1,129.4z",
      fillColor: '#c72026',
      fillOpacity: 1,
      scale: .2,
      strokeColor: '#FFFFFF',
      strokeWeight: 0
    },


    map = new google.maps.Map(document.querySelector('.map-wrapper'), {
    mapTypeControlOptions: {
      mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain', 'styled_map']
    }
  }),
  	  preloader = document.querySelector('.preload-wrapper'),

  	  //import the geocode API
  	  geocoder = new google.maps.Geocoder(),

  	  // directions display
  	 directionsService = new google.maps.DirectionsService(),
  	 directionsDisplay,
     stepDisplay,
  	 locations = [],
  	 markerArray = [],
     directions_but = document.querySelector("#directions_but"),
     steps_but = document.querySelector("#steps_but");




     if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(initMap, handleError);
     } else {
       console.log('else statement');
     }

     function handleError(){
       console.log('something went wrong');
     }



  //load page showing map marker at chantry island

     function initMap(position){

       map.mapTypes.set('styled_map', styledMapType);
       map.setMapTypeId('styled_map');

     	locations[0] = { lat: 44.5013318302915, lng: -81.37176881970849};

     	map.setCenter({lat: 44.5013318302915, lng: -81.37176881970849});
     	map.setZoom(14);

     	  marker = new google.maps.Marker({
     		position : {lat: 44.5013318302915, lng: -81.37176881970849},
        icon: customB,
     		map: map,
     		title: "Chantry Island"
     	});

     	preloader.classList.add('hide-preloader');

      locations[1] = { lat: position.coords.latitude, lng: position.coords.longitude};

      directions_but.addEventListener("click", calcRoute, false);

     directionsDisplay = new google.maps.DirectionsRenderer();
     directionsDisplay.setMap(map);
     directionsDisplay.setPanel(document.querySelector(".directions-wrapper"));

      stepDisplay = new google.maps.InfoWindow();

     	}

  //show route from user's location to chantry
      function calcRoute(){
      marker.setMap(null);

      for (i = 0; i < markerArray.length; i++) {
   markerArray[i].setMap(null);
      }

        var request = {
          origin: locations[1],
          destination: locations[0],
          travelMode: 'DRIVING'
        };

        directionsService.route(request, function(response, status){
        if (status == 'OK') {
          var line = {
            path: 'M 0,-1 0,1',
            strokeColor: "#11132e",
            strokeOpacity: 1,
            scale: 3.5
          },
          dashedline = new google.maps.Polyline({
            path: [],
            strokeOpacity: 0,
            icons: [{
              icon: line,
              offset: '0',
              repeat: '20px'
            }],
            map: map
          }),

            aMarker = new google.maps.Marker({
            position : locations[1],
            icon: customMarker,
            map: map,
            title: "You Are Here"
          }),

          bMarker = new google.maps.Marker({
              position : locations[0],
              icon: customMarker,
              map: map,
              title: "Chantry Island"
            });


    var options = {suppressMarkers: true}; //suppressMarkers: true
     options.directions = response;
     options.map = map;
     options.polylineOptions = dashedline;
     directionsDisplay.setOptions(options);

        directionsDisplay.setDirections(response);
        showSteps(response);
        }
        });
        }

  function showSteps(directionResult) {

  var myRoute = directionResult.routes[0].legs[0];

  for (var i = 0; i < myRoute.steps.length; i++) {
      var marker = new google.maps.Marker({
        position: myRoute.steps[i].start_point,
        icon: customMarker,
        map: map
      });
      attachInstructionText(marker, myRoute.steps[i].instructions);
      markerArray[i] = marker;
}}

function attachInstructionText(marker, text) {
  google.maps.event.addListener(marker, 'click', function() {
    stepDisplay.setContent(text);
    stepDisplay.open(map, marker);
  });
}


})();
