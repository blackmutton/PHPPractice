<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>陣列</h1>
    <?php
    $a=["A","B","C"];
    $b=["name"=>"羊","height"=>163];
    $c=[["A","B","C"],["name"=>"羊","height"=>163]];//二維陣列
    print_r($a);
    echo "<hr>";
    print_r($b);
    echo "<hr>";
    print_r($c);

    echo "<hr>";
    echo serialize($a);
    echo "<hr>";
    echo serialize($b);
    echo "<hr>";
    echo serialize($c);

    echo "<hr>";
    
    $a=['A','B','C'];
    // $tmp=implode(",",$a);
    // 官方建議使用語意上更能讓人明白的join
    $tmp=join(",",$a);
    // $tmp已被轉化為非陣列資料形式，因此可用echo
    echo $tmp;
    echo "<hr>";

    echo "<hr>";
    $b=explode(",",$tmp);
    // $b已被轉換成陣列，因此無法使用echo
    print_r($b);
    ?>
</body>
</html>