<?php
session_start();
$acc=$_POST['acc'];
$pw=$_POST['pwd'];

if($acc=='admin'&&$pwd='1234'){
    // header("location:result.php?acc=$acc");
    $_SESSION['login']=$acc;
    header("location:result.php");
}else{
    // header("location:error.php?acc=$acc");
    $_SESSION['error']='帳號或密碼錯誤';
    // error.php可以直接刪掉，因為已經用不到了
    header("location:login.php");
}
?>