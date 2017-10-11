<?php

header("Content-type:application/json; charset=UTF-8");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
if (isset($_POST['action']) && $_POST['action'] == "list") {
    include_once '../../../lib/config.inc.php';
    $Db5 = new MySqlConn5;

    $sql = "SELECT CONCAT(hp.hosptype,'',hp.name) AS hosname,pat.cid,CONCAT(pat.pname,pat.fname,' ',pat.lname) AS fullname,vn.vstdate,vn.hn,vn.vn,vn.pttype,vn.hospmain FROM vn_stat vn
Left OUTER JOIN pttype pt ON pt.pttype=vn.pttype
LEFT OUTER JOIN patient pat ON pat.hn=vn.hn
LEFT OUTER JOIN hospcode hp ON hp.hospcode=vn.hospmain
WHERE vn.vstdate BETWEEN '2017-08-01' AND curdate() AND pt.hipdata_code IN('UCS','WELL') AND vn.pttype NOT IN ('13','15','98','58','40','99','17') AND vn.hospmain NOT IN('11098')";

    $result = $Db5->query($sql, '');
    
             
             
        foreach ($result as $row ) {
            $data[] = $row ;
        }
             
                echo json_encode($row);   
    
  /*  foreach ($result AS $row) {
        $json_data['data'][] = array(
            "hn" => $row['hn'],
            "fullname" => $row['fullname'],
            "cid" => $row['cid'],
            "vstdate" => $row['vstdate'],
            "pttype" => $row['pttype'],
            "hospmain" => $row['hospmain'],
            "hosname" => $row['hosname']
        );
    }
    if (isset($json_data)) {
        $json = json_encode($json_data);
        if (isset($_GET['callback']) && $_GET['callback'] != "") {
            echo $_GET['callback'] . "(" . $json . ");";
        } else {
            echo $json;
        }
    }*/
}