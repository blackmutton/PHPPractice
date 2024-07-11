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
    $sql="select * from `$table` where ";
    if(is_array($arg)){
        foreach($arg as $key=>$value){
            $tmp[]="`$key`='{$value}'";
            // dd($tmp);
        }
        $sql.=join(" && ",$tmp);
    }else{
        $sql.=" `id` ='{$arg}'";
    }
    // echo $sql;
    $row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function update($table,$cols,$arg){
    global $pdo;

    $sql="update `{$table}` set ";

    foreach($cols as $key =>$value){
        $tmp[]="`$key`='{$value}'";
        dd($tmp);
    }
    $sql.=join(",",$tmp);

    if(is_array($arg)){
        foreach($arg as $key=>$value){
            $tt[]="`$key`='{$value}'";
            dd($tt);
        }
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
    foreach($arg as $key => $value){
        $tmp[]="`$key`='{$value}'";
    }
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
?>