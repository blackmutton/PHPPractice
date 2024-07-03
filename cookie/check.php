<?php
date_default_timezone_set("Asia/Taipei");
$acc=$_POST['acc'];
$pw=$_POST['pwd'];

if($acc=='acc'&&$pwd=='1234'){
    // header('location:result.php?acc='.$acc);
    setcookie('login',$acc,time()+60);
    header("location:result.php");
}else{
    // header("location:error.php?acc=$acc");
    // error可刪除
    setcookie('error',"帳號或密碼錯誤",time()+60);
    header("location:login.php");
}

