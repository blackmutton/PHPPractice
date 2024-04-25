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
    <?php
    echo "今年是".date("Y");
    echo "<br>";
    echo "今天是".date("Y年m月d日");
    echo "<br>";
    $birthday='1999-4-1';
    // date可以轉換為時間，預設為今天日期
    $today=strtotime(date('Y-m-d'));
    $tb=str_replace(mb_substr($birthday,0,4),date('Y'),$birthday);
    if(strtotime($tb)<strtotime('now')){
        $tb=str_replace(mb_substr($birthday,0,4),(date("Y")+1),$birthday);
    }
    $birthday=strtotime($tb);
    $diff=$birthday-$today;
    // floor為無條件捨去法，因應之後如果有人在設定時間時恰好碰到日光節約時間或是取的時間是採用date('now')導致不是從00:00開始而產生小數
    echo floor($diff/(60*60*24));
    ?>
    <h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>
<ul>
    <li>2021/10/05</li>
    <li>10月5日 Tuesday</li>
    <li>2021-10-5 12:9:5</li>
    <li>2021-10-5 12:09:05</li>
    <li>今天是西元2021年10月5日 上班日(或假日)</li>
</ul>
<?php
// 設定默認時區
date_default_timezone_set('Asia/Taipei');
echo date("Y/m/d");
echo "<br>";
echo date("m月j日 l");
echo "<br>";
// (int)date("s")可以讓秒不補0
echo date("Y-m-j H:i:".(int)date("s"));
echo "<br>";
$workday=(date("N")<6)?'工作日':'假日';
echo "今天是西元".date("Y年m月j日 l")."是$workday";
echo "<br>";
echo "<br>";
?>

<h2>利用迴圈來計算連續五個周一的日期</h2>
例:

<ol>
    <li>2021-10-04 星期一</li>
    <li>2021-10-11 星期一</li>
    <li>2021-10-18 星期一</li>
    <li>2021-10-25 星期一</li>
    <li>2021-11-01 星期一</li>
</ol>
<?php
$date ='2024-04-22';
$week=[
    1=>'星期一',
    2=>'星期二',
    3=>'星期三',
    4=>'星期四',
    5=>'星期五',
    6=>'星期六',
    7=>'星期日'
];
for ($i = 0; $i < 5; $i++) {
    // 先將全部換算為秒數
    $day=strtotime("+$i week",strtotime($date));
    //date("N");表示星期幾(1~7)
    echo date("Y-m-d",$day);
    echo $week[date("N",$day)];
    echo "<br>";   
}
?>
</body>
</html>