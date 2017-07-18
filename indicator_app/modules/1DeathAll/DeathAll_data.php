<?php
 include_once '../../../lib/config.inc.php';
$Db2 = new MySqlConn2; 
//$sql="SELECT * FROM pttype";
 $sql = "Select t1.ward,t1.name,
SUM(IF(MONTH(t2.dchdate)=1,1,0)) AS Jan,
SUM(IF(MONTH(t2.dchdate)=2,1,0)) AS Feb ,
SUM(IF(MONTH(t2.dchdate)=3,1,0)) AS Mar,
SUM(IF(MONTH(t2.dchdate)=4,1,0)) AS Apr,
SUM(IF(MONTH(t2.dchdate)=5,1,0)) AS May,
SUM(IF(MONTH(t2.dchdate)=6,1,0)) AS Jun,
SUM(IF(MONTH(t2.dchdate)=7,1,0)) AS Jul,
SUM(IF(MONTH(t2.dchdate)=8,1,0)) AS Aug,
SUM(IF(MONTH(t2.dchdate)=9,1,0)) AS Sep,
SUM(IF(MONTH(t2.dchdate)=10,1,0)) AS Oct,
SUM(IF(MONTH(t2.dchdate)=11,1,0)) AS Nov,
SUM(IF(MONTH(t2.dchdate)=12,1,0)) AS 'Dec',
SUM(IF(MONTH(t2.dchdate),1,0)) AS Total



From (select ward,name from ward WHERE ward in (1,2,3,4) ) as t1
Left outer join (select i.ward,i.dchdate from ipt i 
INNER JOIN an_stat an ON an.an=i.an
where i.dchdate BETWEEN '2015-01-01'AND '2015-05-30' AND i.dchstts in(8,9) AND an.admit_hour >=4 ) as t2 on t1.ward=t2.ward
GROUP BY t1.ward
WITH ROLLUP
";
                $sql = $Db2->query($sql,'');
               $data = array();
        foreach ($sql as $row ) {
            $data[] = $row ;
        }
                $response = array(
      
        "data" => $data
    );	
                echo json_encode($response);   
          
    
