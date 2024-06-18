<?php
$acc=$_POST['acc'];
$pw=$_POST['pwd'];

if($acc=='acc'&&$pwd=='1234'){
    header('location:result.php?acc='.$acc);
}else{
    header("location:error.php?acc=$acc");
}

