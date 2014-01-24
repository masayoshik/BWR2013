var controls = [
  ['Valdez','CTRL#1[Start] (0km)','', 61.129148,-146.349984, 0],
  ['Tsaina Lodge','CTRL#2 (62.5km)','', 61.200348,-145.552737, 0],
  ['Tonsina River Lodge','CTRL#3 (133.3km)','', 61.661844,-145.18272, 0],
  ['Glennalllen (The Hub of Alaska)','CTRL#4 (191.1km)','', 62.107958,-145.475553, 0],
  ['Sourdough Lodge','CTRL#5 (243.8km)','', 62.528591,-145.516063, 0],
  ['Paxon Lodge','CTRL#6 (304.6km)','', 63.029386,-145.496324, 0],
  ['Lodge at Black Rapids','CTRL#7 (372.6km)','', 63.529377,-145.8589786, 0],
  ['Delta Junction','CTRL#8 (434.2km)','Overnight Control -- get some sleep', 64.042104,-145.716483, 0],
  ['Midway Lodge','CTRL#9 (511.5km)','', 64.362803,-146.872748, 0],
  ['Faribanks - Safeway','CTRL#10 (592.5km)','', 64.835656,-147.807962, 0],
  ['Nenana - Chevron','CTRL#11 (675.4km)','', 64.557983,-149.095934, 0],
  ['Healy - Morning Star Baptist Church','CTRL#12 (765.1km)','Overnight Control -- get some sleep', 63.872257,-149.006284, 0],
  ['Cantwell - Broad Pass Cafe','CTRL#13 (826.9km)','', 63.390051,-148.902601, 0],
  ['Hurricane Gulch','CTRL#14 (885.3km)','', 63.01421,-149.590794, 0],
  ['Marry\'s McKinley View Lodge','CTRL#15 (948.3km)','', 62.587503,-150.235637, 0],
  ['Talkeetna - Swiss-Alaska Inn','CTRL#16 (1030.2km)','Overnight Control -- get some sleep', 62.325063,-150.10541, 0],
  ['Wasilla - Walmart','CTRL#17 (1148.3km)','', 61.569233,-149.363263, 0],
  ['Anchorage','CTRL#18[FINISH] (1211.8km)','', 61.222793,-149.88401, 0]
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
      //new google.maps.Point(0,0),
      new google.maps.Point(0,0),
      // The anchor for this image is the base of the flagpole at 0,32.
      new google.maps.Point(13, 32));
  var image_red = new google.maps.MarkerImage('http://maps.google.com/mapfiles/ms/icons/red-dot.png',
      // This marker is 20 pixels wide by 32 pixels tall.
      new google.maps.Size(27, 32),
      // The origin for this image is 0,0.
      new google.maps.Point(0,0),
      // The anchor for this image is the base of the flagpole at 0,32.
      new google.maps.Point(13, 32));
  var image_green = new google.maps.MarkerImage('http://maps.google.com/mapfiles/ms/icons/green-dot.png',
      // This marker is 20 pixels wide by 32 pixels tall.
      new google.maps.Size(27, 32),
      // The origin for this image is 0,0.
      new google.maps.Point(0,0),
      // The anchor for this image is the base of the flagpole at 0,32.
      new google.maps.Point(13, 32));
  var shadow = new google.maps.MarkerImage('http://maps.google.co.jp/mapfiles/ms/icons/msmarker.shadow.png',
      // The shadow image is larger in the horizontal dimension
      // while the position and offset are the same as for the main image.
      new google.maps.Size(37, 32),
      new google.maps.Point(0,0),
      new google.maps.Point(13, 32));
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
      else if (i == 17)
         var img = image_green;
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
