<?php include'php/check_action.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin</title>
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="admin.php">Admin</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
  <li class="dropdown"><a class="app-nav__item" href="php/logout_action.php" ><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="login/images/images.png" width="150" height="150"  alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><img src="login/images/setting.png"width="50" height="50"></p>
          <p class="app-sidebar__user-designation"></p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="admin.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">หน้าแรก</span></a></li>
         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">เพิ่มข้อมูล</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
            <li><a class="treeview-item" href="add_datacar.php"><i class="icon fa fa-circle-o"></i>ข้อมูลรถประจำทาง</a></li>
            <li><a class="treeview-item" href="add_location.php"><i class="icon fa fa-circle-o"></i>สถานที่</a></li>
			<li><a class="treeview-item" href="add_route.php"><i class="icon fa fa-circle-o"></i>แผนที่เส้นทางการเดินรถ</a></li>
          </ul>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">ตารางข้อมูล</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
          <li><a class="treeview-item" href="show_datacar.php"><i class="icon fa fa-circle-o"></i>ข้อมูลรถประจำทาง</a></li>
            <li><a class="treeview-item" href="show_location.php"><i class="icon fa fa-circle-o"></i>สถานที่</a></li>
            <li><a class="treeview-item" href="show_route.php"><i class="icon fa fa-circle-o"></i>ทางการเดินรถ</a></li>
            
          </ul>
          
          
        </li>

      
        </li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> หน้าแรก</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      
        </ul>
         </div>
  
        <div class="row" style="margin-left:30%">
        <div class="col-md-6">
          <div class="tile"> 
            <div class="tile-body" style="font-size:18px">
              <form action="php/editpass.php" method="post">
               	<h3>เปลี่ยนรหัสผ่าน</h3>
                <br>
                <div class="form-group">
                  <label class="control-label">รหัสผ่านเดิม</label>
                  <input class="form-control" name="pass" type="password" placeholder=""required>
                </div>
    
                <div class="form-group">
                  <label class="control-label">รหัสผ่านใหม่</label>
                        <input class="form-control" name="pass_new" type="password" placeholder=""required>
                </div>
                      <div class="form-group">
                  <label class="control-label">ยืนยันรหัสผ่านใหม่</label>
                        <input class="form-control" name="confirm_pass" type="password" placeholder=""required>
                </div>
                    <center>
                 <button class="btn btn-primary" type="submit" ><i class="fa fa-fw fa-lg fa-check-circle"></i>ตกลง</button>
                  &nbsp;&nbsp;&nbsp;
              <a class="btn btn-secondary" href=""><i class="fa fa-fw fa-lg fa-times-circle"></i>ยกเลิก</a>
</center>
        	 </form>
       
            </div>
 
          </div>
        </div>
        </div>
      </div>
    
     
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>