<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>給定兩個日期，計算中間間隔天數</h2>
    <?php
    $start="2024-1-10";
    $end="2024-2-9";
    echo '開始日:'.$start;
    echo "<br>";
    echo '結束日:'.$end;
    echo "<br>";
    // 30天
    // 先將兩者換算成秒
    $start=strtotime($start);
    // strtotime限定的換算日期字串格式為年/月/日或年-月-日，如果原本格式是日/月/年則會出現錯誤
    // strtotime的設定換算時間為當天00:00,須注意這點
    // strtotime因為是套用歐洲的時區，所以在橫跨日期過多時會因為撞上歐洲的日光節約時間而導致時間出現誤差，導致在底下計算天數時無法整除
    $end=strtotime($end);
    echo $start;
    echo "<br>";
    echo $end;
    echo "<br>";
    $diff=$end-$start;
    echo $diff/(60*60*24);
    ?>
    <h2>計算距離自己下一次生日還有幾天</h2>
    <h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>
<ul>
    <li>2021/10/05</li>
    <li>10月5日 Tuesday</li>
    <li>2021-10-5 12:9:5</li>
    <li>2021-10-5 12:09:05</li>
    <li>今天是西元2021年10月5日 上班日(或假日)</li>
</ul>
</body>
</html>