<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Google Map API 3 - 01</title>
<style type="text/css">
html {
	height: 100%
}
body {
	height:100%;
	margin:0;
	padding:0;
	font-family:tahoma, "Microsoft Sans Serif", sans-serif, Verdana;
	font-size:12px;
}
/* css กำหนดความกว้าง ความสูงของแผนที่ */
#map_canvas {
	position:relative;
	width:820px;
	height:684px;
	border:1px #000 solid;

}
#contain_map {
	position:relative;
	width:550px;
	height:400px;
}
#form_get_detailMap{
	position:relative;
	margin-left:80%;
	margin-top:-38.60%;
	
}
#path_arr{
	height:400px;
	width:200px;
}
/* css ของส่วนการกำหนดจุดเริ่มต้น และปลายทาง */  



</style>
</head>

<body>
<div id="contain_map">
  <div id="map_canvas"></div>

  </div>
</div>
  <form id="form_get_detailMap" name="form_get_detailMap" >
 <h2>แผนที่</h1><br />
 ละติจูด<input type="number" id="map_lat" name="map_lat"/> <br /><br />
  ลองจิจูด <input type="number"id="map_lng" name="map_lng" /> <br /><br />
    <input type="button" name="button" id="button" value="ตั้งค่า" onclick="change_location()"/>&nbsp;&nbsp;<input type="button" name="button" id="button" value="รีเซ็ต" onclick="reset_location()"/><br /><br />
  <br />
   <h2> บันทึกเส้นทาง</h2><br />
    <textarea name="path_arr" id="path_arr" cols="70" rows="5"></textarea>
         <input type="button" value="เริ่มกำหนดเส้นทาง" onclick="startLine()"/>
         <input type="button" value="รีเซ็ท" onclick="location.href='http://localhost/project_rmuti/admin/add_lat_lng.php?No=<?php echo $_GET['No']; ?>'"/>
        <input type="button" name="button" id="button" value="บันทึก" onclick="pass_location()"/>
  </form>
	
</div>

<!--<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script> -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>  
<script type="text/javascript">
var array_lat=new Array(),array_lng=new Array();
var count_part=0;
	var map_lat =16.43889, map_lng =102.82861;
 	 $('#map_lat').val(map_lat);
  	$('#map_lng').val(map_lng);
/* ส่วนสำหรับการ random ค่าสีและ event */
var COLORS =[
	["red", "#ff0000"], 
	["orange", "#ff8800"],
	["green","#008000"],
	["blue", "#000080"],
	["purple", "#800080"]
];
var colorIndex_ = 0;
var listener;

 /* ส่วนของการกำหนดค่า สำหรับคำนวณพื้นที่ */
var earthRadiusMeters=6367460.0;
var metersPerDegree=2.0*Math.PI*earthRadiusMeters/360.0;
var degreesPerRadian=180.0/Math.PI;
var radiansPerDegree=Math.PI/180.0;
var metersPerKm=1000.0;
 
 
var map; // กำหนดตัวแปร map ไว้ด้านนอกฟังก์ชัน เพื่อให้สามารถเรียกใช้งาน จากส่วนอื่นได้
var GGM; // กำหนดตัวแปร GGM ไว้เก็บ google.maps Object จะได้เรียกใช้งานได้ง่ายขึ้น
var poly;
var polygon;
var marker=[];
var Points=[];

function swap_class(buttonId) {
	$("#hand_b").removeClass("selected");
	$("#shape_b").removeClass("selected");
	$("#line_b").removeClass("selected");
	$("#placemark_b").removeClass("selected");
	$("#"+buttonId).addClass("selected");
}

function stopEditing() {
	swap_class("hand_b");
	$("#path_arr").val("");
	$("#distance").val("");
	$("#area_data").val("");
	if(listener!=undefined){
		GGM.event.removeListener(listener);
	}
	if(poly!=undefined){
		poly.setMap(null);
	}
	if(polygon!=undefined){
		polygon.setMap(null);
	}	
	if(marker.length>0){
		for(i=0;i<marker.length;i++){
			marker[i].setMap(null);
		}
	}
}
 
function getColor(named) {
  return COLORS[(colorIndex_++) % COLORS.length][named ? 0 : 1];
}
 
function getIcon(color) {
  var icon = new GIcon();
  icon.image = "http://google.com/mapfiles/ms/micons/" + color + ".png";
  icon.iconSize = new GSize(32, 32);
  icon.iconAnchor = new GPoint(15, 32);
  return icon;
}
 

function startShape(){
 	swap_class("shape_b");	
	var color = getColor(true);
    var polygonOptions = {
      strokeColor: color,
	  geodesic:true,
      strokeOpacity: 1.0,
      strokeWeight: 3,
      fillColor: color,
      fillOpacity: 0.35	  
    }
    polygon = new GGM.Polygon(polygonOptions);
    polygon.setMap(map);
	
	startDrawing2(polygon,color);
	
}

function startLine() {
  swap_class("line_b");
	var color = getColor(true);
    var polyOptions = {
      strokeColor: color,
	  geodesic:true,
      strokeOpacity: 1.0,
      strokeWeight: 3
    }
    poly = new GGM.Polyline(polyOptions);
    poly.setMap(map);
	
	startDrawing(poly,color);

}

function count_text(text_location,count_part)
{
	var lat_temp='',lng_temp='',check=false;
	for(i=0;i<text_location.length;i++)
	{
		if(text_location[i]==',')
		{
			check=true;
		}
		else
		{
			if(check==false)
			{
				lat_temp=lat_temp+text_location[i];
			}
			else if(check==true)
			{
				lng_temp=lng_temp+text_location[i];
			}
		}
		
	}
	array_lat[count_part]=lat_temp;
	array_lng[count_part]=lng_temp;
}

function startDrawing(poly,color){
	listener=GGM.event.addListener(map, 'click', function(event){
		var path = poly.getPath();
		var temp_lat,temp_lng;
		path.push(event.latLng);
		var data_path="";
		var k_new;
		$.each(path.getArray(),function(j,k){
			k_new=k.toString().replace("(","\nละติจูด  = ").replace(")","").replace(" ","").replace(",","\nลองจิจูด =");
            k=k.toString().replace("(","").replace(")","").replace(" ","").replace(",",",");
			
			data_path+='เส้นทางที่['+j+'] '+k_new+"\r\n";
			if(path.length-1==j)
				{
				count_text(k,count_part++);	
				}
		});
		
		$("#path_arr").val(data_path);
	});			
}

function pass_location()
{	
	var car=<?php echo $_GET['No']; ?>;
	var url='No='+car+'&&count='+count_part;
	for(i=0;i<count_part;i++)
	{
		url =url+('&&Lat'+i+'='+array_lat[i]+'&&Lng'+i+'='+array_lng[i]);
	}
	window.location.href = 'http://localhost/project_rmuti/admin/php/add_lat_lng_cout_action.php?'+url;
}
function change_location()
{
	 map_lat = $('#map_lat').val();
	 map_lng = $('#map_lng').val();
	 	$("#path_arr").val('');
		initialize();
}
function reset_location()
{
	 map_lat = 16.4388;
	 map_lng = 102.82861;
	  $('#map_lat').val(16.4388);
		$('#map_lng').val(102.82861);
		$("#path_arr").val('');
		initialize();
}
function initialize() { // ฟังก์ชันแสดงแผนที่
	GGM=new Object(google.maps); // เก็บตัวแปร google.maps Object ไว้ในตัวแปร GGM
	// กำหนดจุดเริ่มต้นของแผนที่
	var my_Latlng  = new GGM.LatLng(map_lat,map_lng);
	var my_mapTypeId=GGM.MapTypeId.ROADMAP; // กำหนดรูปแบบแผนที่ที่แสดง
	// กำหนด DOM object ที่จะเอาแผนที่ไปแสดง ที่นี้คือ div id=map_canvas
	var my_DivObj=$("#map_canvas")[0]; 
	// กำหนด Option ของแผนที่
	var myOptions = {
		zoom: 16, // กำหนดขนาดการ zoom
		center: my_Latlng , // กำหนดจุดกึ่งกลาง
		mapTypeId:my_mapTypeId // กำหนดรูปแบบแผนที่
	};
	map = new GGM.Map(my_DivObj,myOptions);// สร้างแผนที่และเก็บตัวแปรไว้ในชื่อ map

 
}
$(function(){
	// โหลด สคริป google map api เมื่อเว็บโหลดเรียบร้อยแล้ว
	// ค่าตัวแปร ที่ส่งไปในไฟล์ google map api
	// v=3.2&sensor=false&language=th&callback=initialize
	//	v เวอร์ชัน่ 3.2
	//	sensor กำหนดให้สามารถแสดงตำแหน่งทำเปิดแผนที่อยู่ได้ เหมาะสำหรับมือถือ ปกติใช้ false
	//	language ภาษา th ,en เป็นต้น
	//	callback ให้เรียกใช้ฟังก์ชันแสดง แผนที่ initialize
	$("<script/>", {
	  "type": "text/javascript",
	  src: "https://maps.googleapis.com/maps/api/js?key=AIzaSyDPOeaZgt6h3gb_8cQV6CAEShzlYXYazHg&callback=initialize"
	}).appendTo("body");	
});
</script>
</body>
</html>