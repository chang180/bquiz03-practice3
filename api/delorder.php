<?php
include_once "../base.php";
$Ord->del(['id'=>$_GET['id']]);
to("../admin.php?do=order");