<?php
include_once "../base.php";
// var_dump($_POST);
foreach($_POST['id'] as $key=>$id){
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
$Poster->del($id);
    }else{
        $row=$Poster->find($id);
        $row['text']=$_POST['text'][$key];
        $row['sh']=(in_array($id,$_POST['sh']))?1:0;
        $row['rank']=$_POST['rank'][$key];
        $Poster->save($row);
    }
}
// echo $_SESSION['ani'];
$_SESSION['ani']=$_POST['ani'];
to("../admin.php?do=poster");