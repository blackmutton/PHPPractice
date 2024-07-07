<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','');

foreach($_POST as $i => $item){
    if($item ==null ||$item== ''){
        header("location:edit.php?id={$_POST['id']}&error=欄位不可為空");
        exit();
    }
}
$cols=[];

foreach($_POST as $key=>$value){
    if($key!='id'){
        $cols[]="`$key`='$value'";
    }
}
print_r($cols);
$sql="update `students` set ".join(",",$cols)."where `id` ='{$_POST['id']}'";
echo $sql;
echo $pdo->exec($sql);

header("location:index.php");
?>