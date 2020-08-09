<?php
include_once "../base.php";
// var_dump($_GET);
$orders=$Ord->all($_GET);
$seat=[];
foreach ($orders as $o){
    $seat=array_merge($seat,unserialize($o['seat']));
}
for($i=1;$i<=20;$i++){
    if(in_array($i,$seat)){
        echo "<span><img src='icon/03D03.png'></span>";
    }else{
        echo "<span><img src='icon/03D02.png'>";
        echo "<input type='checkbox' class='seat' value='$i'></span>";
    }
    if($i%5==0) echo "<br>";
}