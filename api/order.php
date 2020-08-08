<?php

include_once "../base.php";
$_GET['qt']=count($_GET['seat']);
$_GET['seat']=serialize($_GET['seat']);
$mno=$Ord->q("SELECT MAX(id) FROM ord ")[0][0]+1;
$_GET['no']=date("Ymd").sprintf("%04d",$mno);
$Ord->save($_GET);

echo $_GET['no'];