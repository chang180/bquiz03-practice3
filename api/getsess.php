<?php
include_once "../base.php";
$today = date("Y-m-d");
$date=$_GET['date'];
for($i=1;$i<=5;$i++){
    echo "<option value='$i'>$sess[$i] 剩餘座位20</option>";
}