var SQYLat=47.785463;
var SQYLong=2.059722;
var BrestLat=48.785463;
var BrestLong=2.01302;

var controls = [
  ['Saint-Quentin-en-Yvelines','Start (0km)','Finish (1230km)', 48.785463, 2.059722, 9],
  ['Mortagne-au-Perchee','Outbound: Food Stop (140km)','Inboud: Ctrl 12(1090km)', 48.521408,0.541288, 8],
  ['Villaines-la-Juhel','Outboud: Ctrl 1 (222km)','Inbound: Ctrl 11 (1009km)', 48.344613,-0.281099, 7],
  ['Fougères','Outbound: Ctrl 2 (310km)','Inbond: Ctrl 10 (921km)', 48.346025,-1.199809, 6],
  ['Tinténiac','Outbound: Ctrl 3 (364km)','Inbound: Ctrl 9 (867km)', 48.33286,-1.826545, 5],
  ['Loudeac','Outbound: Ctrl 4 (449km)','Inbound: Ctrl 8 (782km)', 48.172955,-2.75165, 4],
  ['Carhaix','Outbound: Ctrl 5 (525km)','Inbound: Ctrl 7 (703km)', 48.278709,-3.545759, 3],
  ['Brest', 'Ctrl 6 Uturn (618km)','',48.391099,-4.480083, 2],
  ['Dreux','Inbound: Ctrl 13 (1165km)','', 48.730457,1.363258, 1]
];

function attachMessage(marker, msg) {
    google.maps.event.addListener(marker, 'click', function(event) {
      new google.maps.InfoWindow({
        content: msg
      }).open(marker.getMap(), marker);
  });
}

function setMarkers(map, locations) {
  // Add markers to the map

  // Marker sizes are expressed as a Size of X,Y
  // where the origin of the image (0,0) is located
  // in the top left of the image.

  // Origins, anchor positions and coordinates of the marker
  // increase in the X direction to the right and in
  // the Y direction down.
  var image = new google.maps.MarkerImage('http://maps.google.com/mapfiles/ms/icons/blue-dot.png',
      // This marker is 20 pixels wide by 32 pixels tall.
      new google.maps.Size(27, 32),
      // The origin for this image is 0,0.
      new google.maps.Point(0,0),
      // The anchor for this image is the base of the flagpole at 0,32.
      new google.maps.Point(0, 32));
  var image_red = new google.maps.MarkerImage('http://maps.google.com/mapfiles/ms/icons/red-dot.png',
      // This marker is 20 pixels wide by 32 pixels tall.
      new google.maps.Size(27, 32),
      // The origin for this image is 0,0.
      new google.maps.Point(0,0),
      // The anchor for this image is the base of the flagpole at 0,32.
      new google.maps.Point(0, 32));
  var shadow = new google.maps.MarkerImage('http://maps.google.co.jp/mapfiles/ms/icons/msmarker.shadow.png',
      // The shadow image is larger in the horizontal dimension
      // while the position and offset are the same as for the main image.
      new google.maps.Size(37, 32),
      new google.maps.Point(0,0),
      new google.maps.Point(0, 32));
      // Shapes define the clickable region of the icon.
      // The type defines an HTML &lt;area&gt; element 'poly' which
      // traces out a polygon as a series of X,Y points. The final
      // coordinate closes the poly by connecting to the first
      // coordinate.
  var shape = {
      coord: [1, 1, 1, 20, 18, 20, 18 , 1],
      type: 'poly'
  };
  var pos = new Array();
  for (var i = 0; i < locations.length; i++) {
      var p = locations[i];
      pos.push(new Array(p[0],p[1],p[2],p[3],p[4],p[5]));
  }
  var markerarray = new Array();
  for (var i = 0; i < locations.length; i++) {
      if (i == 0 )
         var img = image_red;
      else
         var img = image;
      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(pos[i][3], pos[i][4]),
        shadow: shadow,
        icon: img,
        shape: shape,
        map: map,
        title: pos[i][0],
        zIndex: pos[i][5]
      });
      var msg=""+pos[i][0]+"</br>"+pos[i][1]+"</br>"+pos[i][2];
      attachMessage(marker,msg);
  }
}
