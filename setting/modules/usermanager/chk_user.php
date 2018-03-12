<?PHP include_once '../../../lib/config.inc.php';

$Db = new MySqlConn; 
$Db->rule('admin_access', 'usermanager', 'index');

if($_POST['username']){
   $data = array(
        'username' => $_POST['username']
    );
    $Db->where_data($data, 'and');
    $num = $Db->num_rows('employee');
    if ($num>0)  {
    // User name is registered on another account
    echo 'false';
  } 
  else  {
    // User name is available
     echo 'true';
  }
}