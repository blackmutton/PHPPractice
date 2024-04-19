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

    echo "<hr>";

    $score=[
        'judy'=>[
            "國文"=>95,
            "英文"=>64,
            "數學"=>70,
            "地理"=>90,
            "歷史"=>84
        ],
        'amo'=>[
            "國文"=>88,
            "英文"=>78,
            "數學"=>54,
            "地理"=>81,
            "歷史"=>71
        ],
        'john'=>[
            "國文"=>45,
            "英文"=>60,
            "數學"=>68,
            "地理"=>70,
            "歷史"=>62
        ],
        'peter'=>[
            "國文"=>59,
            "英文"=>32,
            "數學"=>77,
            "地理"=>54,
            "歷史"=>42
        ],
        'hebe'=>[
            "國文"=>71,
            "英文"=>62,
            "數學"=>80,
            "地理"=>62,
            "歷史"=>64
        ]
    ];
    print_r($score);
    ?>
    <h2>利用程式來產生陣列</h2>
    <ul>
        <li>以迴圈的方式產生一個九九乘法表</li>
        <li>將九九乘法表的每個項目以字串型式存入陣列中</li>
        <li>再以迴圈方式將陣列內容印出</li>
    </ul>
    <?php
    $ninenine=[];
    for($i=1;$i<=9;$i++){
        for($j=1;$j<=9;$j++){
            // ehco "$i x $j = " .($i*$j);
            $ninenine[]="$i x $j = ".($i*$j);
        }
        // echo "<br>";
        // 陣列不需要換行
    }
    echo "<pre>";//使用pre就可以讓網頁如實呈現程式碼的排版，不會被網頁自動壓縮空白
    print_r($ninenine);
    echo "</pre>";
    ?>
</body>
</html>