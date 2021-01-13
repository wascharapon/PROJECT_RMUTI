<?php
session_start();
 include('php/connect.php'); 

?>
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
			<div class="fh5co-gallery" >
	<?php 
			$text ='Action';
			$sql = "SELECT * FROM data_car WHERE Route_Confirm='Action' ORDER BY id ASC";
					if($_SESSION["Language"]=='TH')
			{
				$cheking='THAI';
				$cheking_L='Route_TH';
			}
				else 
			{
				$cheking='ENGLISH';
				$cheking_L='Route_ENG';
			}
					
				
			if($rs = @mysqli_query($con, $sql))
		    {
					while($bn = mysqli_fetch_array($rs))
					{
							
						
						echo "<a class=\"gallery-item\" href=\"php\session.php?car=".$bn['No']."\">";	
						echo "<img src=\"img/car/".$bn['No'].".png\" \">";
						echo "<span class=\"overlay\">";?>
						<h2><?php $sql = "SELECT * FROM vocabulary WHERE ID = 7";
						
			
			if($sql_i = @mysqli_query($con, $sql))
		    {
					if($bn_a = mysqli_fetch_array($sql_i))
					{?>
						
					<?php echo $bn_a[$cheking];?>
                      <?php 
							}
			}
					?> <?php echo $bn['No'] ?></h2>
                    <span>
					
					
				<?php $sql = "SELECT * FROM vocabulary WHERE ID = 8";
						
			
			if($sql_i = @mysqli_query($con, $sql))
		    {
					if($bn_a = mysqli_fetch_array($sql_i))
					{?>
						
					<?php echo $bn_a[$cheking];?>
                      <?php 
							}
			}
					?>  <?php 
					
					
					
					echo $bn[$cheking_L] ?></span>
                        <?php
						
						echo "</a>";
						
					}
			}
					?>
		
				
					
					
						
						
					</span>
				</a>
			</div>
			
	

			

		</div>
	</div>
				</a>
			<script src="js/jquery.min.js"></script>
			
	

			

		</div>
	<script src="js/jquery.easing.1.3.js"></script>

	<!-- jQuery -->
	<script src="js/bootstrap.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Waypoints -->
	<script src="js/main.js"></script>

	</body>
</html>

