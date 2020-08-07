<?php
include_once "../base.php";
$_POST['ondate']=$_POST['year']."_".$_POST['month']."_".$_POST['day'];
unset($_POST['year'],$_POST['month'],$_POST['day']);
$_POST['trailer']=$_FILES['trailer']['name'];
$_POST['poster']=$_FILES['poster']['name'];
$Movie->save($_POST);
to("../admin.php?do=movie");