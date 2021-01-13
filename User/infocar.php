<?php include('php/connect.php'); 

session_start();
  ?>
<style> 
p{color:#7ac143;}
</style>
<!DOCTYPE html>

	<meta charset="utf-8">
		<title></title>
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

			<h1 id="fh5co-logo"><a href="index.php"><img src="img/RMUTI.png"width="150"  height="220" ></a></h1>
			<nav id="fh5co-main-menu" role="navigation">
						<ul>
                        	<?php 
				
			if($_SESSION["Language"]=='TH')
			{
				$cheking='THAI';
			}
				else 
			{
				$cheking='ENGLISH';
			}
							
			$sql = "SELECT * FROM vocabulary WHERE ID = 2";
						
			
			if($rs = @mysqli_query($con, $sql))
		    {
					if($bn = mysqli_fetch_array($rs))
					{?>
						
					<li><a href="index.php"><?php echo $bn[$cheking];?></a></li>
                      <?php 
							}
			}
					?>
                                        	<?php 
			$sql = "SELECT * FROM vocabulary WHERE ID = 3";
						
				
			if($rs = @mysqli_query($con, $sql))
		    {
					if($bn = mysqli_fetch_array($rs))
					{?>
						
                      <li class="fh5co-active"><a href="datacar.php"><?php echo $bn[$cheking];?></a></li>
                      <?php 
					}
			}
					?>
                                                 	<?php 
			$sql = "SELECT * FROM vocabulary WHERE ID = 4";
						
				
			if($rs = @mysqli_query($con, $sql))
		    {
					if($bn = mysqli_fetch_array($rs))
					{?>
						
                      <li><a href="comment.php"><?php echo $bn[$cheking];?></a></li>
                      <?php 
					}
			}
					?>
                                                 	<?php 
			$sql = "SELECT * FROM vocabulary WHERE ID = 5";
						
				
			if($rs = @mysqli_query($con, $sql))
		    {
					if($bn = mysqli_fetch_array($rs))
					{?>
						
                      <li ><a href="Creator.php"><?php echo $bn[$cheking];?></a></li>
                      <?php 
					}
			}
					?>
				</ul>
			</nav>

			<center>
       
            
            </center>
			<div class="fh5co-footer">
				<!-- <p><small>&copy; 2016 Blend Free HTML5. All Rights Reserved.</span> <span>Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> </span> <span>Demo Images: <a href="http://pexels.com/" target="_blank">Pexels</a></span></small></p> -->
		     <br><br>
          <h style="color:#000;"> Language </h>
            <br>
            <?php 
             if($_SESSION["Language"]=='TH') {?>
            <h>Thai</h>&nbsp;|&nbsp;<a href="php/language.php">English</a>
           <?php }else { ?>
           <a href="php/language.php">Thai</a>&nbsp;|&nbsp;<h>English</h>
           <?php }?>
			</div>

		</aside>

			
            
		<div id="fh5co-main">

				<?php 
			$sql = "SELECT * FROM data_car WHERE No=".$_GET['car']." ";		
			$sql_a = "SELECT * FROM location_data WHERE No_car=".$_GET['car']." ORDER BY id ASC";			
			if($rs = @mysqli_query($con,$sql))
		    {
					if($bn = mysqli_fetch_array($rs))
					{
					$No=$bn['No'];	
					   if($_SESSION["Language"]=='TH') {
        	$route=$bn['Route_TH'];	
            }else { 
         $route=$bn['Route_ENG'];	
            }
					$time=$bn['Time'];	
					$fare=$bn['Fare'];		
					}
			}
					?>

			<div class="fh5co-narrow-content animate-box fh5co-border-bottom" data-animate-effect="fadeInLeft">
	
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft" style="color:#000">                                           	
				<?php 
			$sql = "SELECT * FROM vocabulary WHERE ID = 7";
						
				
			if($rs = @mysqli_query($con, $sql))
		    {
					if($bn = mysqli_fetch_array($rs))
					{?>
						
                      <?php echo $bn[$cheking];?>
                      <?php 
					}
			}
					?><?php echo $No ;?> </h2>
					
				<div class="row">
					<?php include('map_data.php'); ?>
				</div>
                <div class="fh5co-narrow-content">
				<div class="row">
					<div class="col-md-5">
						<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft" >			
						<?php 
			$sql = "SELECT * FROM vocabulary WHERE ID = 8";
						
				
			if($rs = @mysqli_query($con, $sql))
		    {
					if($bn = mysqli_fetch_array($rs))
					{?>
						
                      <?php echo $bn[$cheking];?>
                      <?php 
					}
			}
					?></h2>
						<p class="fh5co-lead animate-box" data-animate-effect="fadeInLeft"><?php echo $route ;?></p>
                        <p class="fh5co-lead animate-box" data-animate-effect="fadeInLeft"><h style="color:#000"><?php 
			$sql = "SELECT * FROM vocabulary WHERE ID = 9";
						
				
			if($rs = @mysqli_query($con, $sql))
		    {
					if($bn = mysqli_fetch_array($rs))
					{?>
						
                      <?php echo $bn[$cheking];?>
                      <?php 
					}
			}
					?></h> <br><?php echo $fare ;?> <?php 
			$sql = "SELECT * FROM vocabulary WHERE ID = 12";
						
				
			if($rs = @mysqli_query($con, $sql))
		    {
					if($bn = mysqli_fetch_array($rs))
					{?>
						
                      <?php echo $bn[$cheking];?>
                      <?php 
					}
			}
					?></p>
                        <p class="fh5co-lead animate-box" data-animate-effect="fadeInLeft"><h style="color:#000"><?php 
			$sql = "SELECT * FROM vocabulary WHERE ID = 10";
						
				
			if($rs = @mysqli_query($con, $sql))
		    {
					if($bn = mysqli_fetch_array($rs))
					{?>
						
                      <?php echo $bn[$cheking];?>
                      <?php 
					}
			}
					?> </h><br><?php echo $time ;?></p>
                        <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">		<?php 
			$sql = "SELECT * FROM vocabulary WHERE ID = 11";
						
				
			if($rs = @mysqli_query($con, $sql))
		    {
					if($bn = mysqli_fetch_array($rs))
					{?>
						
                      <?php echo $bn[$cheking];?>
                      <?php 
					}
			}
					?></h2>
						<p class="animate-box" data-animate-effect="fadeInLeft"><?php  
				   if($rs = @mysqli_query($con,$sql_a))
				   {
					   $i=0;
					  	while($bn_a = mysqli_fetch_array($rs))
					 {
						 $i++;
						 	if($_SESSION["Language"]=='TH')
			{
			 echo $i.".".$bn_a['Name_TH']."<br>";
			}
				else 
			{
				 echo $i.".".$bn_a['Name_ENG']."<br>";
			}
				      
					 }
				   }
				   
					
					?></p>
					</div>
					<div class="col-md-6 col-md-push-1 animate-box" data-animate-effect="fadeInLeft">
						<img src="img/car/<?php echo $_GET['car']; ?>.png" alt="" class="img-responsive"> 
					</div>
				</div>
				
			</div>
                
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>

	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

