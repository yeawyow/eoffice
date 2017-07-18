<?php

define("host", "localhost");
define("username", "yeaw");
define("password", "48172520914072529mM");
define("db", "airoffice");


define("host2", "192.168.2.11");
define("username2","sa");
define("password2","sa");
define("db2", "hos");

class MySqlConn {

    protected $_mysql;
    protected $_tableName;
    protected $_where;
    protected $_order;
    protected $_limit;

    public function __construct() {
        $this->_mysql = new mysqli(host, username, password, db)
                or die('not connect to sql');
    }

    public function where($prop, $value) {
        if (!empty($prop) && !empty($value)) {
            $this->_where = "WHERE $prop = '$value'";
        }
    }

    public function order($order, $sort) {
        if (!empty($order)) {
            $this->_order = "order by $order $sort";
        }
    }

    public function limit($value) {
        if (!empty($value)) {
            $this->_limit = "LIMIT $value";
        }
    }

    public function query($sql = '', $tableName = '') {
        if (!empty($sql)) {
            $sql = $sql;
        } else {
            $sql = 'SELECT * FROM';
        }
        $results = '';
        $this->_tableName = $tableName;
        $query = $this->_mysql->query('SET NAMES UTF8');
        $query = $this->_mysql->query("$sql $this->_tableName $this->_where
                 $this->_order $this->_limit");



        while ($row = $query->fetch_array()) {
            $results[] = $row;
        }

        return $results;
    }

    public function update($tableName, $data) {
        if (!empty($data)) {
            $keys = array_keys($data);

            $sql = "UPDATE $tableName SET ";
            for ($i = 0; $i < count($data); $i++) {
                if (is_string($data[$keys[$i]])) {
                    $sql .= $keys[$i] . "='" . $data[$keys[$i]] . "'";
                    if ($i != count($data) - 1) {
                        $sql .= ',';
                    }
                }
            }

            $sql .= $this->_where;

            if ($sql) {
                $query = $this->_mysql->query('SET NAMES UTF8');
                $this->_mysql->query($sql);
            }
        }
    }
public function delete($tableName)
{
    if(!empty($tableName)){
    $sql = "delete from $tableName $this->_where";
    $this->_mysql->query($sql);
    }
}
    public function insert($tableName = '', $data) {

        if (!empty($data)) {

            $keys = array_keys($data);
            $value = array_values($data);

            $sql = "INSERT INTO $tableName ";
            $sql .= "(";
            foreach ($keys AS $key => $k) {
                $sql .= $k;
                if ($key !== count($keys) - 1)
                    $sql .= ', ';
            }
            $sql .= ")";
            $sql .= "VALUES ";
            $sql .= "(";
            foreach ($value AS $val => $v) {
                $sql .= "'" . $v . "'";
                if ($val !== count($value) - 1)
                    $sql .= ', ';
            }
            $sql .= ")";
            if ($sql) {
                $query = $this->_mysql->query('SET NAMES UTF8');
                $this->_mysql->query($sql);
            }
        }
    }

    public function where_data($data, $opera = '') {
        if (!empty($data)) {
            $keys = array_keys($data);
            $where = "WHERE ";
            for ($i = 0; $i < count($data); $i++) {
                if (is_string($data[$keys[$i]])) {
                    $where .= $keys[$i] . "='" . $data[$keys[$i]] . "'";
                    if ($i != count($data) - 1) {
                        $where .= " $opera ";
                    }
                }
            }

            $this->_whereuser = $where;
        }
    }

    public function num_rows_qurery($tableName) { //หาจำนวนแถวทั่วไป
        $this->_tableName = $tableName;
        $sql = 'SELECT * FROM';
        $query = $this->_mysql->query("$sql $this->_tableName $this->_where");
        $results = mysqli_num_rows($query);

        return $results;
    }

    public function num_rows($tableName) { //ใช้ตรวจสอบการ login
        $this->_tableName = $tableName;
        $sql = 'SELECT * FROM';
        $query = $this->_mysql->query("$sql $this->_tableName $this->_whereuser");
        $results = mysqli_num_rows($query);

        return $results;
    }

//ตรวจสอบการเข้าใช้งานแต่ละหน้า
    public function rule($table,$pages,$topage) {
        $Db = new MySqlConn;
        $warning = 'ท่านไม่สามารถใช้งานหน้านี้ได้ กรุณาติดต่อ ADMIN';
        $groupuser = (isset($_SESSION['groupname']) ? $_SESSION['groupname'] : ''); //ตรวจสอบถ้ามีจาก session ของ id_user ถ้าไม่มีให้แทนด้วยค่าว่าง
        if ($groupuser == "1") { //ตรวจสอบว่าถ้าไม่มีการ login ให้ออกจากการทำงาน 1คือ ผู้ดูแลระบบให้ผ่านทุกหน้า
            return TRUE;
        } else {
            $Db->where('name', $pages);
            $sql = $Db->query('', $table);
            foreach ($sql AS $row) {
                $allow_group = explode(",", $row['allow_group']); //ตัดเครื่องหมาย , ออก
                foreach ($allow_group as $row_allow_group) {

                    if ($row_allow_group == $groupuser) {
                        return TRUE;
                    } else {
                        
                         
                        echo "<script> alert('ท่านไม่ได้รับอนุญาติให้ดูหน้านี้ ') </script>";
                        echo "<script> window.location.replace('".$topage.".php') </script>";
                    }
                }
            }
        }
    }

}

class MySqlConn2 { //query only

    protected $_mysql;
    protected $_tableName;
    protected $_where;
    protected $_order;
    protected $_limit;

    public function __construct() {
        $this->_mysql = new mysqli(host2, username2, password2, db2)
                or die('not connect to sql');
    }

    public function where($prop, $value) {
        if (!empty($prop) && !empty($value)) {
            $this->_where = "WHERE $prop = '$value'";
        }
    }

    public function order($order, $sort) {
        if (!empty($order)) {
            $this->_order = "order by $order $sort";
        }
    }

    public function limit($value) {
        if (!empty($value)) {
            $this->_limit = "LIMIT $value";
        }
    }

    public function query($sql = '', $tableName = '') {
        if (!empty($sql)) {
            $sql = $sql;
        } else {
            $sql = 'SELECT * FROM';
        }
        $results = '';
        $this->_tableName = $tableName;
        $query = $this->_mysql->query('SET NAMES UTF8');
        $query = $this->_mysql->query("$sql $this->_tableName $this->_where
                 $this->_order $this->_limit");



        while ($row = $query->fetch_array()) {
            $results[] = $row;
        }

        return $results;
    }

    public function where_data($data, $opera = '') {
        if (!empty($data)) {
            $keys = array_keys($data);
            $where = "WHERE ";
            for ($i = 0; $i < count($data); $i++) {
                if (is_string($data[$keys[$i]])) {
                    $where .= $keys[$i] . "='" . $data[$keys[$i]] . "'";
                    if ($i != count($data) - 1) {
                        $where .= " $opera ";
                    }
                }
            }

            $this->_whereuser = $where;
        }
    }

    public function num_rows_qurery($tableName) { //หาจำนวนแถวทั่วไป
        $this->_tableName = $tableName;
        $sql = 'SELECT * FROM';
        $query = $this->_mysql->query("$sql $this->_tableName $this->_where");
        $results = mysqli_num_rows($query);

        return $results;
    }

}

function DateThai($strDate)

{

$strYear = date("Y",strtotime($strDate))+543;

$strMonth= date("n",strtotime($strDate));

$strDay= date("j",strtotime($strDate));

$strHour= date("H",strtotime($strDate));

$strMinute= date("i",strtotime($strDate));

$strSeconds= date("s",strtotime($strDate));

$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");

$strMonthThai=$strMonthCut[$strMonth];

return "$strDay $strMonthThai $strYear";

}




