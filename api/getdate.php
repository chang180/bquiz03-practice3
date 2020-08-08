<?php
include_once "../base.php";
$today = date("Y-m-d");
$movie=$Movie->find($_GET['id']);
$ondate = $movie['ondate'];

for($i=0;$i<=2;$i++){
if($ondate>=$today){
    echo "<option value='$ondate'>$ondate</option>";
}
$ondate=date("Y-m-d",strtotime("$ondate +1 days"));
}