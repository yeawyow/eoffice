<?PHP

session_start();
if(!isset($_SESSION['loginname']))
{
   
        echo "<script> window.location.replace('../login.php') </script>" ;
}
include_once '../lib/config.inc.php';
$Db = new MySqlConn;


$Db->rule('admin_access','หน้าหลักแอดมิน','../index');//เงื่อนไขการเข้าใช้งาน
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>


    <!-- Bootstrap -->
    <link href="../includes/css/bootstrap.min.css" rel="stylesheet">
   
    <link href="../includes/DataTables-1.10.13/css/dataTables.bootstrap.min.css" rel="stylesheet">
  
    
      <link href="../includes/select2/css/select2.css" rel="stylesheet"/>
  </head>
  <body>
      <div class="wrapper"> 
          <div class="header-top">
              <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SETTING PROGRAM</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="?m=usermanager&p=userdata">จัดการข้อมูลผู้ใช้ <span class="sr-only">(current)</span></a></li>
     
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
      
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">สวัสดี <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="../index.php">ออกจากระบบ</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
               <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
               <script src="../includes/jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
       <script src=" ../includes/DataTables-1.10.13/js/jquery.dataTables.min.js"></script>
       <script src="../includes/DataTables-1.10.13/js/dataTables.bootstrap.min.js"></script>
       
          <!-- validator -->
    
          <script src="../includes/validator/jquery.validate.min.js"></script>
     
      <script src="../includes/select2/js/select2.js"></script>
      
      
          </div>
          <div class="container-fluid">
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
              </div> 
          </div>
</div>  
  
   <!-- start:javascript -->

 
  </body>
</html>