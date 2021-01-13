<?php include('php/connect.php'); 

session_start();
  ?>
<style>
#map {height:650px ; width:100%; border:2px #525050 solid; }
</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAK3RgqSLy1toc4lkh2JVFQ5ipuRB106vU&callback=myMap" async defer></script>
<script src="jquery/jquery-3.2.1.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script >
function myMap(){
	var options = { 
	center:new google.maps.LatLng(16.42711687360559,102.87060409784317),
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
				position:new google.maps.LatLng(16.42711687360559,102.87060409784317),
				map:maps,
				icon:icon_this,
				});
				info = new google.maps.InfoWindow();
				google.maps.event.addListener(marker,'mouseover',(function(marker,i){
					return function(){
						info.setContent('ที่อยู่ปัจจุบัน');
						info.open(maps,marker);
					}
					})(marker,i));
	$.getJSON("php/jsondata.php",function(jsonObj){
	$.each(jsonObj,function(i,item){
			marker = new google.maps.Marker({
				position:new google.maps.LatLng(item.Lat,item.Lng),
				map:maps,
				icon:icon,
				});
				info = new google.maps.InfoWindow();
				google.maps.event.addListener(marker,'mouseover',(function(marker,i){
					return function(){
						
						info.setContent((i+1)+'.'+item.Name_TH);
						info.open(maps,marker);
					}
					})(marker,i));

		});
	});
	var flightPlanCoordinates = [
    <?php
	$sql_car_route = "SELECT Lat,Lng FROM car_route WHERE No_car = $_GET[car] ORDER BY Order_route ASC  ";
    $query = mysqli_query($con,$sql_car_route);
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