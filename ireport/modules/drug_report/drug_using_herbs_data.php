
<?php
include_once '../../../lib/config.inc.php';
$Db2 = new MySqlConn2;

//ตรวจสอบว่ามีการส่งค่าตัวแปร $_POST['value'] หรือไม่
//MySqli Select Query
//$value = $_POST['value'];

$d1 = $_POST['d1'];
$d2 = $_POST['d2'];
$sql_code = "select i.icode,d.did,d.name,count(case when i.vn is null then i.an else i.vn end) as cc ,d.unitprice
    ,count(case when i.vn is null then i.an else i.vn end)*d.unitprice as cs
from opitemrece i
left join drugitems d on d.icode = i.icode
left join pttype ptt on ptt.pttype = i.pttype
where vstdate between '" . $d1 . "' and '" . $d2 . "'
and d.drugcategory like '%สมุน%'
group by d.name
order by cc desc";


$sql = $Db2->query($sql_code, '');
?>


    <!-- Main content -->

    <!-- title row -->

    

   
    
    <table  class="table table-bordered">
        <thead>
            <tr>
                <th colspan="6"><h2 class="text-xs-center">รายงานการใช้ยาสมุนไพรของโรงพยาบาลอากาศอำนวย </h2>
                    <div class="text-lg-center">ตั้งแต่  <?PHP echo DateThai($_POST['d1']); ?>     ถึง  <?PHP echo DateThai($_POST['d2']); ?> </div> </th>
            </tr>
            <tr>
                <th width="3">ลำดับ</th>
                <th>ชื่อยาสมุนไพร</th>
                <th>รหัสยาสมุนไพร</th>
                <th>ราคา/หนวย</th>
                <th>จำนวน</th>
                <th>รวม</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (is_array($sql) && sizeof($sql)) { // ตรวจสอบค่าที่ส่งมาว่าเป็น array หรือไม่

                $no = 0;
                $total_sum_price = 0;
                $count_qty = 0;
                foreach ($sql as $row) {
                    $no++;
                    $total_sum_price += $row['cc'];
                    $count_qty += $row['cs'];
                    ?>
                    <tr>
                        <td ><?= $no; ?></td>
                        <td ><?= $row['name']; ?></td>
                        <td width="8"><?= $row['icode']; ?></td> 
                        <td><?=number_format($row['unitprice'], 2, '.', ''); ?></td>
                        <td width="6"><?= $row['cc']; ?></td>
                
                        <td><?=number_format($row['cs'], 2, '.', ''); ?></td>

                    </tr>

                <?php }
                ?> <tr>

                    <td colspan="3"></td>
                    <td rowspan="2"><?=$total_sum_price." ครั้ง"; ?></td>
                    <td></td>
                    <td><?=number_format($count_qty, 2, '.', '')." บาท";?></td>

                </tr>
                <?PHP
               
            }
            ?>
        </tbody>
    </table>
วันที่เรียกรายงาน: <?PHP echo DateThai(date('ymd')) ?>
<!-- /.col -->
   
<!-- /.row -->
 <?php//echo count($sql) ?>

