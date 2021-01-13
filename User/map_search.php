  <?php 
           		if($_SESSION["Language"]=='TH')
			{
				$cheking_B='ที่อยู่ปัจจุบัน';
				$cheking_A='จุดหมาย';
					$language='TH';
			}
				else 
			{
				$cheking_B='Location';
				$cheking_A='Destinations';
						$language='EN';
			}
				?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPOeaZgt6h3gb_8cQV6CAEShzlYXYazHg&language=<?php echo $language;?>&callback=myMap" async defer></script>
<script src="jquery/jquery-3.2.1.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">

function myMap(){
	var options = { 
	center:new google.maps.LatLng(<?php echo $_SESSION["location_lat"]; ?>,<?php echo $_SESSION["location_lng"]; ?>),
	zoom:15,
	mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	var maps = new google.maps.Map(document.getElementById('map'),options);
	///marker
		var marker,info;
	var i;
	var poly;
	var icon = {
    url: "img/icon/location.png", // url
    scaledSize: new google.maps.Size(50, 50), // scaled size
    origin: new google.maps.Point(0,0), // origin
    anchor: new google.maps.Point(0, 0) // anchor
	};
	var icon_this = {
    url: "img/icon/human.png", // url
    scaledSize: new google.maps.Size(50, 50), // scaled size
    origin: new google.maps.Point(0,0), // origin
    anchor: new google.maps.Point(0, 0) // anchor
	};

				marker = new google.maps.Marker({
				position:new google.maps.LatLng(<?php echo $_SESSION["location_lat"] ?>,<?php echo $_SESSION["location_lng"]; ?>),
				map:maps,
				icon:icon_this,
				});
				info = new google.maps.InfoWindow();
				google.maps.event.addListener(marker,'mouseover',(function(marker,i){
					return function(){
						info.setContent('<?php echo $cheking_B;?>');
						info.open(maps,marker);
					}
					})(marker,i));
								marker = new google.maps.Marker({
				position:new google.maps.LatLng(<?php echo $_GET['Lat']?>,<?php echo $_GET['Lng']?>),
				map:maps,
				icon:icon,
				});
				info = new google.maps.InfoWindow();
				google.maps.event.addListener(marker,'mouseover',(function(marker,i){
					return function(){
						info.setContent('<?php echo $cheking_A;?>');
						info.open(maps,marker);
					}
					})(marker,i));

	var flightPlanCoordinates = [
    <?php
	$sql = "SELECT Lat,Lng FROM car_route WHERE No_car = $_GET[car]  ORDER BY Order_route ASC ";
    $query = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($query)){
        $lat = $row['Lat'];
        $lng = $row['Lng'];
        echo 'new google.maps.LatLng('.$lat.', '.$lng.'),';
    }  ?>
    ];
		flightPath = new google.maps.Polyline({
			path:flightPlanCoordinates,
          strokeColor:'black',
             strokeOpacity: 1.0,
          strokeWeight: 2
        });
	 flightPath.setMap(maps);
}
</script>

<div id="map"></div>