<?php
include_once '../../../lib/config.inc.php';
$Db = new MySqlConn;
$Db->rule('admin_access', 'usermanager', 'index');		
	
   
      // $sql=array("username"=>"yeaw","password"=>"มาตุภูมิ");
    $Db->where('uid', $_POST['sql']);
$sql = $Db->query('select * from employee', '');
            $a_data=array();
          foreach ($sql as $row){
                 array_push($a_data,$row);	
                 
             }
echo json_encode($row);
    