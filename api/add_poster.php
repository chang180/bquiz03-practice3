<?php
include_once "../base.php";
if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"img/".$_FILES['img']['name']);
    $row['img']=$_FILES['img']['name'];
}
// var_dump($Poster->q("SELECT * FROM poster"));
$row['text']=$_POST['text'];
$row['sh']=1;
$row['rank']=$Poster->q("SELECT MAX(rank) FROM poster ")[0][0]+1;
// var_dump($_FILES);
$Poster->save($row);
to("../admin.php?do=poster");