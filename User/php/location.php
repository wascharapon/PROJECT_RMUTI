<!DOCTYPE html>
<html>
  <body>
  <div>กรุณารอสักครูู่.............</div>
  <div id="map"></div>
    <script>
      function location_Map() {
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
				window.location.href = "http://localhost/project_rmuti/user/php/location_action.php?location_lat="+position.coords.latitude+"&&location_lng="+position.coords.longitude;	
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAK3RgqSLy1toc4lkh2JVFQ5ipuRB106vU&callback=location_Map" async defer></script>
  </body>
</html>
