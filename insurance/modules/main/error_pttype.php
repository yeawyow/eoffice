
<?php

//include_once '../lib/config.inc.php';
include_once '/var/www/html/eoffice/lib/config.inc.php';
$Db5 = new MySqlConn5;
$Db = new MySqlConn;
$sql = "SELECT pat.cid,hd.name AS hospdep, CONCAT(hp.hosptype,'',hp.name) AS hosname,CONCAT(pat.pname,pat.fname,' ',pat.lname) AS fullname,vn.vstdate,vn.hn,vn.vn,vn.pttype,vn.hospmain,ou.name AS name_staff ,pt.name AS typename,ov.vsttime FROM vn_stat vn
Left OUTER JOIN pttype pt ON pt.pttype=vn.pttype
LEFT OUTER JOIN patient pat ON pat.hn=vn.hn
LEFT OUTER JOIN hospcode hp ON hp.hospcode=vn.hospmain
INNER JOIN ovst ov ON ov.vn=vn.vn
LEFT OUTER JOIN opduser ou ON ou.loginname=ov.staff
LEFT JOIN  hospital_department hd ON hd.id=ou.hospital_department_id
WHERE vn.vstdate BETWEEN '2018-04-10' AND curdate() AND pt.hipdata_code IN('UCS','WEL') AND vn.pttype NOT IN ('51','52','13','15','98','56','58','59','40','99','17','76','78') AND vn.hospmain NOT IN('11098') ";


$num = $Db5->num_rows_qurery($sql, '');
if ($num > 0) {
    $result = $Db5->query($sql, '');
    foreach ($result AS $row) {
        $data = array(
            'vn' => $row['vn'],
            'hn' => $row['hn'],
            'vstdate' => $row['vstdate'],
            'vsttime'=>$row['vsttime'],
             'hosname' => $row['hosname'],
            'pttype' => $row['pttype'],
              'pttype_name' => $row['typename'],
            'cid' => $row['cid'],
            'fullname' => $row['fullname'],
            'name_staff' => $row['name_staff'],
            'hospdep' => $row['hospdep']
            
            
          
           
        );

        $Db->insert('insurance_error_pttype', $data);



        // }

        $lineapi = "Wx6BYMBhxMJlrDjWuiD2m2LZ10m7Wf7IPODdgB5jfti";
//iNiWu4G08ols6Cp66UXNvayIYBNO1l8KYjbxZ9PUjwF เอาไว้ทดสอบ
//wWhE4ZpvHO40gQzW27J8Vlps5fPyqn785qcK2iW6W6D กลุ่มงานประกัน
        //Wx6BYMBhxMJlrDjWuiD2m2LZ10m7Wf7IPODdgB5jfti กลุ่มตรวจสอบสิทธิ์
        $mms = "HN : " . $row['hn'] . "  วันที่รับบริการ :" . $row['vstdate'] . "  เวลา :"
.$row['vsttime']."  " . $row["fullname"] . "  " . "CID :" . $row['cid'] . "  สิทธ์:" . $row['pttype'] . " " . $row['typename']
                . "  " . $row['hosname'] . "   " . "ผู้ส่งตรวจ:" . $row['name_staff']

        ;


        date_default_timezone_set("Asia/Bangkok");
//line Send

        $chOne = curl_init();
        curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
// SSL USE 
        curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
//POST 
        curl_setopt($chOne, CURLOPT_POST, 1);
// Message 
        curl_setopt($chOne, CURLOPT_POSTFIELDS, "message=$mms");
//¶éÒµéÍ§¡ÒÃãÊèÃØ» ãËéãÊè 2 parameter imageThumbnail áÅÐimageFullsize
//curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=$mms&imageThumbnail=http://plusquotes.com/images/quotes-img/surprise-happy-birthday-gifts-5.jpg&imageFullsize=http://plusquotes.com/images/quotes-img/surprise-happy-birthday-gifts-5.jpg&stickerPackageId=1&stickerId=100"); 
// follow redirects 
        curl_setopt($chOne, CURLOPT_FOLLOWLOCATION, 1);
//ADD header array 
        $headers = array('Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer ' . $lineapi . '',);
        curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
//RETURN 
        curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($chOne);
//Check error 
        if (curl_error($chOne)) {
            echo 'error:' . curl_error($chOne);
        } else {
            $result_ = json_decode($result, true);
            echo "status : " . $result_['status'];
            echo "message : " . $result_['message'];
        }
//Close connect 
        curl_close($chOne);
    }
}

