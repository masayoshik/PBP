var map;
//var mymarker;
var controls;

function initialize() {
  var latlng = new google.maps.LatLng(37.42,-122.3);
  var opts = {
    zoom: 12,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById("map_canvas"), opts);

  var obj={
     icon: 'markers/cycling.reverse.png',
     shadow: 'markers/cycling.reverse.shadow.png',
     position:new google.maps.LatLng(mylat,mylong),
     map:map
  };

  mymarker=new google.maps.Marker(obj);
  var infowindow = new google.maps.InfoWindow({
    content: "Current Location",
    size: new google.maps.Size(30, 30)
  });
  google.maps.event.addListener(mymarker, 'click', function() {
    infowindow.open(map, mymarker);
  });

//  setMarkers(map,controls);

  var ctaLayer = new google.maps.KmlLayer('http://masaridespbp.com/testmap.kml');
  ctaLayer.setMap(map);
}

function doOpen () {
  map.panTo(48.589326,-12.09385);
}

function doClose () {
  mymarker.setMap(null);
}
