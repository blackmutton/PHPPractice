<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','');

function all($table,$where){
    global $pdo;
    $sql="select * from `{$table}` {$where}";
    echo $sql;
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    return $rows;
}

function find($table,$arg){
    global $pdo;
    $sql="select * from `$table` where ";
    if(is_array($arg)){
        $tmp=array2sql($arg);
        echo "\$tmp"."<br>";
    print_r($tmp);
        $sql.=join(" && ",$tmp);
    }else{
        $sql.=" `id` ='{$arg}'";
    }
    echo $sql;
    $row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function update($table,$cols,$arg){
    global $pdo;

    $sql="update `{$table}` set ";

    $tmp=array2sql($cols);
    echo "\$tmp"."<br>";
    print_r($tmp);
    $sql.=join(",",$tmp);

    if(is_array($arg)){
        $tt=array2sql($arg);
        echo "\$tt"."<br>";
    print_r($tt);
        $sql.=" where ".join(" && ",$tt);
    }else{
        $sql.=" where `id`='{$arg}'";
    }
    echo $sql;
    return $pdo->exec($sql);
}

function insert($table,$cols){
    global $pdo;

   $sql="insert into `{$table}` ";
    $sql.="(`".join("`,`",array_keys($cols))."`)";
    $sql.="values('".join("','",$cols)."')";
echo $sql;
    return $pdo->exec($sql);
}

function del($table,$arg){
global $pdo;
$sql="delete from `{$table}` where ";
if(is_array($arg)){
    $tmp=array2sql($arg);
    echo "\$tmp"."<br>";
    print_r($tmp);
    $sql.=join(" && ",$tmp);
}else{
    $sql.=" `id`='{$arg}'";
}
echo $sql;
return $pdo->exec($sql);
}

function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function save($table,$array){
    if(isset($array['id'])){
        update($table,$array,$array['id']);
    }else{
        insert($table,$array);
    }
}

function array2sql($array){
    foreach($array as $key=>$value){
        $tmp[]="`$key`='$value'";
    }

    return $tmp;
}

function q($sql){
    global $pdo;
    return $pdo->query($sql)->fetchAll();
}
?>