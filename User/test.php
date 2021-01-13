<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
  </head>
  <body>
  <div id="map"></div>
  <?php
session_start();
$_SESSION["car"] = $_GET['car'];
 ?>
    <script>
      function initMap() {
			var mapOptions = {}
			var maps = new google.maps.Map(document.getElementById("map"),mapOptions);
			infoWindow = new google.maps.InfoWindow;
			// Try HTML5 geolocation.
			if (navigator.geolocation) {
			  navigator.geolocation.getCurrentPosition(function(position) {
				var pos = {
				  lat: position.coords.latitude,
				  lng: position.coords.longitude
				};
				window.location.href = 'http://localhost/project_rmuti/user/infocar.php?car=<?php echo $_GET['car']; ?>&&lat='+position.coords.latitude+'&&lng='+position.coords.longitude';

				alert(position.coords.latitude + ',' + position.coords.longitude);
				
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
  
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAK3RgqSLy1toc4lkh2JVFQ5ipuRB106vU&callback=initMap" async defer></script>
  </body>
</html>
