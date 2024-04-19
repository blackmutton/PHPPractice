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
    <style>
        table{
            border-collapse:collapse;
        }
        tr,td{
            border:1px black solid;
        }
</style>
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
    /* echo "<pre>";//使用pre就可以讓網頁如實呈現程式碼的排版，不會被網頁自動壓縮空白
    print_r($ninenine);
    echo "</pre>"; */

    // 變數需設在外面，否則會重置
    $count=1;
    foreach($ninenine as $value){
        echo $value;
        
        if($count%9==0){
            echo "<br>";
        }
        $count++;
    }

    /*另一個寫法(在一開始便指定key=>value)
     foreach($ninenine as $idx=>$value){
        echo $value;
        
        if($idx+1%9==0){
            echo "<br>";
        }
    } */
    echo "<hr>";
    echo "<table>";
    
    foreach($ninenine as $idx=>$nine){
        if($idx%9==0){

            echo "<tr>";
        }    
            echo "<td>$nine</td>";
        }if($idx+1%9==0){
            echo "</tr>";
        }
  
    echo "</table>";

    echo "陣列中有".count($ninenine)."個元素";
    ?>

    <h2>威力彩電腦選號沒有重覆號碼(利用while迴圈)</h2>
    <ul>
        <li>使用亂數函式rand($a,$b)來產生號碼</li>
        <li>將產生的號碼順序存入陣列中</li>
        <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
        <li>完成選號後將陣列內容印出</li>
    </ul>

    <?php
    /* 
    亂數產生數字
    迴圈產生6個1~38數字
    比較數字
    陣列存放數字(存放比較後不重複的數字)
    */
    $lotto=[];
    while (count($lotto) <6) {
        $tmp=rand(1,38);
        if(!in_array($tmp,$lotto)){
            $lotto[]=$tmp;
        }
    }

    echo join(",",$lotto);

    ?>

    <h2>找出五百年內的閏年</h2>
<ul>
    <li>請依照閏年公式找出五百年內的閏年</li>
    <li>使用陣列來儲存閏年</li>
    <li>使用迴圈來印出閏年</li>
    <li>已知西元1024年為甲子年，請設計</li>
</ul>
<?php
$leaps=[];
$year=2024;
for($i=$year;$i<($year+500);$i++){

    if(($i%4==0&&$i%100!=0)||$i%400==0){
        $leaps[]=$i;
    }
}
echo "<h3>自$year 至".($year+500)."止，有以下閏年：</h3>";
foreach($leaps as $leap){
    echo $leap;
    echo "<br>";
}

echo "<hr>";
echo "共有".count($leaps)."個閏年";
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>