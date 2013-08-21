function initialize() {
/*
  var latlng = new google.maps.LatLng(8.48333, 124.65000);
  var latlng = new google.maps.LatLng(-88.3974335, 42.7833839);
  var latlng = new google.maps.LatLng(42.7833839, -88.3974335);

  var settings = {
    zoom: 14,
    center: latlng,
    mapTypeControl: true,
    mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
    navigationControl: true,
    navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
    mapTypeId: google.maps.MapTypeId.ROADMAP};
  var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
  
  var infowindow = new google.maps.InfoWindow({
    content: contentString
  });
  
  var companyImage = new google.maps.MarkerImage('/sites/all/themes/crossfit/images/mapicon.png',
    new google.maps.Size(100,50),
    new google.maps.Point(0,0),
    new google.maps.Point(50,50)
  );

  var companyShadow = new google.maps.MarkerImage('images/logo_shadow.png',
    new google.maps.Size(130,50),
    new google.maps.Point(0,0),
    new google.maps.Point(65, 50));

  var companyPos = new google.maps.LatLng(8.48333, 124.65000);

  var companyMarker = new google.maps.Marker({
    position: companyPos,
    map: map,
    icon: companyImage,
    shadow: companyShadow,
    title:"Høgenhaug",
    zIndex: 3});
  
  var trainImage = new google.maps.MarkerImage('images/train.png',
    new google.maps.Size(50,50),
    new google.maps.Point(0,0),
    new google.maps.Point(50,50)
  );

  var trainShadow = new google.maps.MarkerImage('images/train_shadow.png',
    new google.maps.Size(70,50),
    new google.maps.Point(0,0),
    new google.maps.Point(60, 50)
  );

  var trainPos = new google.maps.LatLng(57.0429, 9.9173);

  var trainMarker = new google.maps.Marker({
    position: trainPos,
    map: map,
    icon: trainImage,
    shadow: trainShadow,
    title:"Train Station",
    zIndex: 2
  });

  var parkingImage = new google.maps.MarkerImage('images/parking.png',
    new google.maps.Size(50,50),
    new google.maps.Point(0,0),
    new google.maps.Point(50,50)
  );

  var parkingShadow = new google.maps.MarkerImage('images/parking_shadow.png',
    new google.maps.Size(70,50),
    new google.maps.Point(0,0),
    new google.maps.Point(60, 50)
  );

  var parkingPos = new google.maps.LatLng(57.0437, 9.9147);

  var parkingMarker = new google.maps.Marker({
    position: parkingPos,
    map: map,
    icon: parkingImage,
    shadow: parkingShadow,
    title:"Parking Lot",
    zIndex: 1
  });
  
  google.maps.event.addListener(companyMarker, 'click', function() {
    infowindow.open(map,companyMarker);
  });

*/

var map = new GMaps({
  el: '#map_canvas',
/*
    lat: 14.6970,
    lng: 121.1220,
*/
    lat: 42.7833839,
    lng: -88.3974335,
    zoom: 14,
    zoomControl : true,
    zoomControlOpt: {
//    style : 'SMALL',
//    position: 'TOP_LEFT'
    },
    panControl : false,
});
map.addMarker({
//42.7833839, -88.3974335
/*
    lat: 14.6970,
    lng: 121.1220,
    lng: 42.7833839,
    lat: -88.3974335,
*/
    lat: 42.7833839,
    lng: -88.3974335,
    icon: "/sites/all/themes/crossfit/images/mapicon.png",
    title: 'Marker with InfoWindow',
    infoWindow: {
      content: '<p><strong>East Troy Body Shop</strong><br>Address here</p>'
    }
});            
var styles = [
  {
    stylers: [
      { hue: "#50b990" },
      { saturation: -20 }
    ]
  },
  {
    featureType: "road",
    elementType: "geometry",
    stylers: [
      { lightness: 100 },
      { visibility: "simplified" }
    ]
  },
  {
    featureType: "road",
    elementType: "labels",
    stylers: [
      { visibility: "off" }
    ]
  }
];
                    
/*
    map.addStyle({
      styledMapName:"Styled Map",
      styles: styles,
      mapTypeId: "map_style"  
    }); 
    map.setStyle("map_style");
*/
}
