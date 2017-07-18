<?php

include_once '../../../lib/config.inc.php';
$Db = new MySqlConn;
// ส่วนของการเพิ่ม ลบ แก้ไข ข้อมูล
if ($_POST['saveBtn']) {  //ถ้ามีการกดปุ่ม saveBtn2
    if ($_POST['edit_group']) { //ถ้ามีการส่งค่า group_user_id มาแสดงว่าเป็นการแก้ไข
        

            $data = array(
                'username' => $_POST['username'],
              );
      
        $Db->where('group_user_id', $_POST['edit_group']);
        $Db->update('group_user', $data);
  
}  else { //ถ้าไม่มีการส่งค่า uid มา แสดงว่าบันทึกใหม่

        $data = array(
            'group_user_name' => $_POST['group_user_name'],
           
        );

        $Db->insert('group_user', $data);
    }
}