<?php
session_start();
if(!isset($_SESSION['loginname']))
{
   
        echo "<script> window.location.replace('login.php') </script>" ;
}

include_once '../lib/config.inc.php';
$Db = new MySqlConn;
$Db2 = new MySqlConn2;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ระบบรายงาน I REPORT</title>

  <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
<meta name="robots" content="noindex">
<!-- progress CSS 
<link rel="stylesheet" href="../includes/progess/css/jquery.progresstimer.css">-->
<!-- Material Design Icons  -->
<link href="assets/css/material.css" rel="stylesheet">



<!-- MDK -->
<link type="text/css" href="assets/vendor/material-design-kit.css" rel="stylesheet">

<!-- Sidebar Collapse -->
<link type="text/css" href="assets/vendor/sidebar-collapse.min.css" rel="stylesheet">

<!-- App CSS -->
<link type="text/css" href="assets/css/style.min.css" rel="stylesheet">

  
<!-- Vendor CSS -->
<link rel="stylesheet" href="assets/css/morris.min.css">
<!-- Vendor CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

 <!-- Datepicker -->
 <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
 

</head>
<body class="ls-top-navbar">

  <!-- Navbar -->
<nav class="navbar navbar-dark bg-primary navbar-full navbar-fixed-top">

	<!-- Toggle sidebar -->
	<button class="navbar-toggler" type="button" data-toggle="sidebar"></button>

	<!-- Brand -->
	<a href="" class="navbar-brand"><i class="material-icons">IREPORT</i> ระบบรายงานออนไลน์ รพ.อากาศอำนวย</a>



	<div class="navbar-spacer"></div>
	
	<!-- Menu --> 
	<ul class="nav navbar-nav hidden-sm-down">
		<li class="nav-item">
			<a class="nav-link" href=""></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href=""></a>
		</li>
	</ul>

	<!-- Menu -->
	<ul class="nav navbar-nav">
		<!-- User dropdown -->
<li class="nav-item dropdown">
    <a class="nav-link active dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"></a>
  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Preview">
    <a class="dropdown-item" href="fixed-instructor-account-edit.html">
      <i class="material-icons">edit</i> Edit Account
    </a>
    <a class="dropdown-item" href="fixed-instructor-profile.html">
      <i class="material-icons">person</i> Public Profile
    </a>
      <a class="dropdown-item" href="../index.php">
      <i class="material-icons">lock</i> กลับหน้าแรก
    </a>
  </div>
</li>
<!-- // END User dropdown -->
	</ul>
</nav>
<!-- // END Navbar -->
   <!-- jQuery -->
<script src="assets/vendor/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="assets/vendor/tether.min.js"></script>
<script src="assets/vendor/bootstrap.min.js"></script>

<!-- MDK -->
<script src="assets/vendor/dom-factory.js"></script>
<script src="assets/vendor/material-design-kit.js"></script>

<!-- Sidebar Collapse -->
<script src="assets/vendor/sidebar-collapse.js"></script>

<!-- App JS -->
<script src="assets/vendor/main.min.js"></script>

  <!-- progressbar -->
  <script src="../includes/progess/js/jquery.progresstimer.js"></script>

<!-- datepicker -->
<script src="assets/datepicker/bootstrap-datepicker.js"></script>
<script src="assets/datepicker/bootstrap-datepicker-thai.js"></script>
<script src="assets/datepicker/locales/bootstrap-datepicker.th.js"></script>

  <div class="container">
    
   <?php
// Application 
                $app = (isset($_GET['m']) ? $_GET['m'] : 'main');
                $file = (isset($_GET['p']) ? $_GET['p'] : 'default');

                if (file_exists('modules/' . $app . '/' . $file . '.php')) {
                    include 'modules/' . $app . '/' . $file . '.php';
                } else {
                    echo '404,ไม่พบหน้าที่ท่านเรียก';
                }
                ?>
   
    <div class="footer">
    
    </div>
  </div>

  <!-- Sidebar -->
<div class="mdk-drawer mdk-js-drawer" id="default-drawer">
  <div class="mdk-drawer__content ls-top-navbar-xs-up">
    <div class="sidebar sidebar-left sidebar-light bg-white sidebar-p-y">
     
     
     
      <!-- Components menu -->
<div class="sidebar-heading">ถ้าท่านต้องการรายงานเพิ่มเติมกรุณาติดต่อ ADMIN</div>
<ul class="sidebar-menu">
  <li class="sidebar-menu-item">
    <a class="sidebar-menu-button sidebar-js-collapse" href="#">
      <i class="sidebar-menu-icon material-icons">tune</i> เภสัชกรรม
    </a>
    <ul class="sidebar-submenu sm-condensed">
      <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="?m=drug_report&p=drug_using_herbs">ข้อมูลการใช้ยาสมุนไพร</a>
      </li>
    
    </ul>
  </li>
</ul>
<!-- // END Components Menu -->
    </div>
  </div>
</div>

<!-- // END Sidebar -->

  

</body>
</html>