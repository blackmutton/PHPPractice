<?php
include "db.php";

$img=find('images',$_GET['id']);
unlink("images/".$img['name']);
del('images',$_GET['id']);
header("location:upload.php");
?>