<?PHP include_once '../../../lib/config.inc.php';

$Db = new MySqlConn; 


if($_POST['group_name']){
   $data = array(
        'group_user_name' => $_POST['group_name']
    );
   $Db->where('id',$_POST['sql']);
    $num = $Db->num_rows('group_user');
    if ($num>0)  {
    // User name is registered on another account
    echo 'false';
  } 
  else  {
    // User name is available
     echo 'true';
  }
}