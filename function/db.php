<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','');

function all($table,$where){
    global $pdo;
    $sql="select * from `{$table}` {$where}";
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    return $rows;
}

function find($table,$arg){
    global $pdo;
    $sql="select * from `dept` where ";
    if(is_array($arg)){
        foreach($arg as $key=>$value){
            $tmp[]="`$key`='{$value}'";
            dd($tmp);
        }
        $sql.=join(" && ",$tmp);
    }else{
        $sql.=" `id` ='{$arg}'";
    }
    echo $sql;
    $row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
?>