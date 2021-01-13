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
        <li><a class="app-menu__item" href="admin.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">หน้าแรก</span></a></li>
         <li class="treeview"><a class="app-menu__item active" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">เพิ่มข้อมูล</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
            <li><a class="treeview-item" href="add_datacar.php"><i class="icon fa fa-circle-o"></i>ข้อมูลรถประจำทาง</a></li>
            <li><a class="treeview-item" href="add_location.php"><i class="icon fa fa-circle-o"></i>สถานที่</a></li>
			<li><a class="treeview-item" href="add_route.php"><i class="icon fa fa-circle-o"></i>แผนที่เส้นทางการเดินรถ</a></li>
          </ul>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">ตารางข้อมูล</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
          <li><a class="treeview-item" href="show_datacar.php"><i class="icon fa fa-circle-o"></i>ข้อมูลรถประจำทาง</a></li>
            <li><a class="treeview-item" href="show_location.php"><i class="icon fa fa-circle-o"></i>สถานที่</a></li>
            <li><a class="treeview-item" href="show_route.php"><i class="icon fa fa-circle-o"></i>เส้นทางการเดินรถ</a></li>
            
          </ul>
          
          
        </li>

      </ul>
    </aside>
    <main class="app-content">
      <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>&nbsp;เพิ่มข้อมูล</h1>
          <p></p>
        </div>
  
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">รถประจำทาง</h3>
            <div class="tile-body">
              <form action="php/add_datacar_active.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="control-label">เลขประจำสายรถ</label>
                  <input class="form-control" name="No" type="number" placeholder="">
                </div>
                <div class="form-group">
                  <label class="control-label">เวลารับ-ส่ง</label>
                  <input class="form-control" name="Time" type="text" placeholder="">
                </div>
                <div class="form-group">
                  <label class="control-label">ค่าโดยสาร</label>
                        <input class="form-control" name="Fare" type="number" placeholder="">
                </div>
        
                <div class="form-group">
                  <label class="control-label">LOGO</label>
                  <input class="form-control" name="Logo" type="file">
                </div>
       
            </div>
 
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <div class="tile-body">
           
              
                <div class="form-group row">
                  <label class="control-label col-md-3">ทางเดินรถ(TH)</label>
                  <div class="col-md-8">
                    <textarea class="form-control" rows="4" name="Route_TH" placeholder="Enter your address"></textarea>
                  </div>
           
                     <br><br><br><br><br>
                      <label class="control-label col-md-3">ทางเดินรถ(ENG)</label>
                  <div class="col-md-8">
                    <textarea class="form-control" rows="4" name="Route_ENG" placeholder="Enter your address"></textarea>
                  </div>
              
                </div>
                
        
           
            
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
             
              <button class="btn btn-primary" type="submit" ><i class="fa fa-fw fa-lg fa-check-circle"></i>เพิ่ม</button>
              &nbsp;&nbsp;&nbsp;
              <a class="btn btn-secondary" href=""><i class="fa fa-fw fa-lg fa-times-circle"></i>ยกเลิก</a>

                </div>
              </div>
                </form>
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