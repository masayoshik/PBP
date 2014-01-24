var map;
//var mymarker;
var controls;

function initialize() {
//  var latlng = new google.maps.LatLng(48.589326,-2.09385);
  var latlng = new google.maps.LatLng(48.589326,-0.5);
  var opts = {
    zoom: 7,
    center: latlng,
//    mapTypeId: google.maps.MapTypeId.ROADMAP
    mapTypeId: google.maps.MapTypeId.TERRAIN
  };
  map = new google.maps.Map(document.getElementById("map_canvas"), opts);
  var bikeicon;
  var bikeshadow;
  if ( direction == "in" ) {
    bikeicon='markers/cycling.png';
    bikeshadow='markers/cycling.shadow.png';
  }else if ( direction == "out" ){
    bikeicon='markers/cycling.reverse.png';
    bikeshadow='markers/cycling.reverse.shadow.png';
  } 

  var obj={
     icon: bikeicon,
     shadow: bikeshadow,
     position:new google.maps.LatLng(mylat,mylong),
     map:map
  };

  mymarker=new google.maps.Marker(obj);
  var location=""+mylat+","+mylong;
//  var content_ = "<a href=\"http://map.google.com/?ll=LOC&z=12&q=Masa+is+here@XXX\" Target=\"_blank\">Masa's Location at TIME (local time)</a>";
//  content_ = content_.replace("LOC",location);
  var content_ = "Masa's Location at</br>PTIME (France Time)</br>CTIME (California)</br>JTIME (Japan)";
  content_ = content_.replace("PTIME",ptime);
  content_ = content_.replace("CTIME",ctime);
  content_ = content_.replace("JTIME",jtime);
  var content = content_.replace("XXX",location);
  var infowindow = new google.maps.InfoWindow({
    content: content,
    size: new google.maps.Size(30, 30)
  });
  google.maps.event.addListener(mymarker, 'click', function() {
    infowindow.open(map, mymarker);
  });

  setMarkers(map,controls);

  var irouteLayer = new google.maps.KmlLayer('http://masaridespbp.com/PBP2011-Inbound-small.kml');
  irouteLayer.setMap(map);
  var orouteLayer = new google.maps.KmlLayer('http://masaridespbp.com/PBP2011-Outbound-small.kml');
  orouteLayer.setMap(map);
}

function doOpen () {
  map.panTo(48.589326,-12.09385);
}

function doClose () {
  mymarker.setMap(null);
}
