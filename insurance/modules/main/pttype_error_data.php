<?php

header("Content-type:application/json; charset=UTF-8");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
if (isset($_POST['action']) && $_POST['action'] == "list") {
    include_once '../../../lib/config.inc.php';
    $Db5 = new MySqlConn5;

    $sql = "SELECT pat.cid, CONCAT(hp.hosptype,'',hp.name) AS hosname,CONCAT(pat.pname,pat.fname,' ',pat.lname) AS fullname,vn.vstdate,vn.hn,vn.vn,vn.pttype,vn.hospmain,ou.name AS name_staff FROM vn_stat vn
Left OUTER JOIN pttype pt ON pt.pttype=vn.pttype
LEFT OUTER JOIN patient pat ON pat.hn=vn.hn
LEFT OUTER JOIN hospcode hp ON hp.hospcode=vn.hospmain
INNER JOIN ovst ov ON ov.vn=vn.vn
LEFT OUTER JOIN opduser ou ON ou.loginname=ov.staff
WHERE vn.vstdate BETWEEN '2017-08-01' AND curdate() AND pt.hipdata_code IN('UCS','WELL') AND vn.pttype NOT IN ('13','15','98','58','40','99','17') AND vn.hospmain NOT IN('11098')";

    $result = $Db5->query($sql, '');

    foreach ($result AS $row) {
        $no++;
        $json_data['data'][] = array(
            "no" => $no,
            "hn" => $row['hn'],
            "fullname" => $row['fullname'],
             "cid"=>$row['cid'],
             "vstdate"=>$row['vstdate'],
             "hospmain"=>$row['hospmain'],
             "hosname"=>$row['hosname'],
              "name_staff"=>$row['name_staff']
        );
    }
    if (isset($json_data)) {
        $json = json_encode($json_data);
        if (isset($_GET['callback']) && $_GET['callback'] != "") {
            echo $_GET['callback'] . "(" . $json . ");";
        } else {
            echo $json;
        }
    }
}