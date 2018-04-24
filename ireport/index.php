<?php
session_start();
include_once '../lib/config.inc.php';
$Db = new MySqlConn;
$Db2 = new MySqlConn2;
//$Db->rule();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>I-REPORT โรงพยาบาลอากาศอำนวย</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="stylesheet" href="theme/css/bootstrap31.css" media="screen">
        <link href="../includes/bootstrap-datepicker/css/datepicker.css" rel="stylesheet">
        <link href="theme/css/main.css" rel="stylesheet">
        <link href="../includes/DataTables-1.10.13/css/dataTables.bootstrap.min.css" rel="stylesheet">


        <script src="../includes/jquery-3.1.1.min.js"></script>
         <script src="../includes/bootstrap-3.3.7/js/bootstrap.min.js"></script>
        <script src="../includes/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="../includes/bootstrap-datepicker/js/bootstrap-datepicker-thai.js"></script>
        <script src="../includes/bootstrap-datepicker/js/locales/bootstrap-datepicker.th.js" charset="UTF-8"></script>
        <script src=" ../includes/DataTables-1.10.13/js/jquery.dataTables.min.js"></script>
        <script src="../includes/DataTables-1.10.13/js/dataTables.bootstrap.min.js"></script>
        <script src="../includes/validator/jquery.validate.min.js"></script>
    </head>
    <body>
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
                    <a class="navbar-brand" href="#">ระบบรายงาน IREPORT รพ.อากาศอำนวย</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">รายงานฝ่ายเภสัช <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">รายงานแพทย์แผนไทย <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="?m=thaimedicine&p=drug_using_herbs">รายงานการใช้ยาสมุนไพร</a></li>

                                <li role="separator" class="divider"></li>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ศูนย์ Palliative Care <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="?m=palliative&p=palliative">รายการผู้ป่วย pallaitive</a></li>

                                <li role="separator" class="divider"></li>

                            </ul>
                        </li>  
                        <li class="nav-item">
                            <a class="nav-link" href="../">กลับสู่หน้าหลัก</a>
                        </li>
                    </ul>



                </div><!-- /.navbar-collapse -->

            </div><!-- /.container-fluid -->

        </nav>

        <div class="row">
            <div class="frame-main">

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
        <footer>
            <div class="row">
                <div class="col-lg-12">



                </div>
            </div>

        </footer>






        <script type="text/javascript">


            //date_piker
            $('.input-daterange').datepicker({
                autoclose: true,
                language: "th-th",
                format: 'yyyy-mm-dd',
                todayHighlight: true

            });
            $('.datepicker').datepicker({
                autoclose: true,
                language: "th-th",
                format: 'yyyy-mm-dd',
                todayHighlight: true
            });
        </script>
    </body>
</html>

