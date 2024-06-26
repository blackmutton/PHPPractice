<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>流程結構練習</title>
</head>
<body>
    <h2>判斷成績及格學生</h2>
    <h3>給定一個成績數字，判斷是否及格(60)分</h3>
    <?php
    $score=70;
    echo '成績為'.$score.'分';
    echo '<br>';
    /* 一定要將$result宣告在迴圈外，否則會出現錯誤 */
    $result='';
    if($score >=60){
        /* 但是在迴圈內如果是直接宣告數字沒關係，但如果是運算的話，會出現錯誤 */
        // $result =5
        $result='及格';
    }else{
        $result='不及格';
    }

    echo '判斷為'. $result;
?>
<h2>分配成績等級</h2>
<h3>給定一個成績數字，根據成績所在的區間，給定等級</h3>
<!--
     shift +crtl+p 叫出快速功能
    輸入wrap,找到使用縮寫換行,按enter
    輸入emmet語法
    多行時,使用*來包覆每一行
-->
<ul>
    <li>0 ~ 59 => E</li>
    <li>60 ~ 69 => D</li>
    <li>70 ~ 79 => C</li>
    <li>80 ~ 89 => B</li>
    <li>90 ~ 100 => A</li>
</ul>

<?php
$score=0;
$level='';
if ($score>=90 && $score<=100) {
    $level='A';
}else if($score>=80){
    $level='B';
}else if($score>=70){
    $level='C';
}else if($score>=60){
    $level='D';
}else if($score>=0){
    $level='E';
}else {
    $level='成績為0~100之間，請重新輸入';
}

echo '成績為：'.$score.'分';
echo '<br>';
echo '等級為：'.$level;
echo '<br>';

        $words='';
        switch ($level) {
            case 'A':
             $words='<b>成績優異</b>';
            $color='green';
                break;
            case 'B':
             $words='<b>用功努力</b>';
             $color='#2eec73';
                break;
            case 'C':
             $words='<b>加油!再接再厲</b>';
             $color='blue';
                break;
            case 'D':
              $words='<b>追求最佳進步</b>';
              $color='skyblue';
                break;
            case 'E':
             $words='<b>請認真唸書</b>';
             $color='red';
                break;
            default:
             $words='<b>成績輸入錯誤</b>';
             $color='#21d716';
                break;
        }
       /*  if ($level=='A' || $level=='B' || $level=='C'|| $level=='D') {
            echo "<span style='font-size:32px;color:red'>";
            
        }else {
            echo "<span style='font-size:32px;color:black'>";
                } 
            echo $words;
            echo "</span>";
                */
           
        

        echo "<span style='font-size:32px;color:$color'>";
        echo $words;
        echo "</span>";
?>
<h2>閏年判斷，給定一個西元年份，判斷是否為閏年</h2>
<style>
    .desc{
        width:500px;
        padding:10px;
        background:lightsalmon;
        color:darkmagenta;
        border: 1px solid #666;
        box-shadow:2px 2px 5px lightsalmon;
    }
</style>

<div class="desc">地球對太陽的公轉一年的真實時間大約是365天5小時48分46秒，因此以365天定為一年 的狀況下，每年會多出近六小時的時間，所以每隔四年設置一個閏年來消除這多出來的一天。</div>
<ul>
    <li>公元年分除以4不可整除，為平年。</li>
    <li>公元年分除以4可整除但除以100不可整除，為閏年。</li>
    <li>公元年分除以100可整除但除以400不可整除，為平年。</li>
</ul>

<?php
$year=2000;
echo "年份為".$year;
echo "<br>";

/* if ($year%4 == 0) {
    if($year%100==0){
        if($year%400==0){
            echo $year."是閏年";
        }else{

            echo $year."是平年";
        }
    }else{
    echo $year."是閏年";
    }
}else{
    echo $year."是平年";
} */

// 縮減後
// if邏輯中最容易產生true、最能限縮範圍的命題放在前面
if (($year%4==0 && $year%100!=0 )|| $year%400==0) {
    echo $year."是閏年";
    }else{
    echo $year."是平年";
}


?>

<h3>簡單迴圈練習</h3>
<ul>
    <li>1,3,5,7,9……n</li>
    <li>10,20,30,40,50,60……n</li>
    <li>3,5,7,11,13,17……97</li>
</ul>
<?php
for ($i=1; $i <20 ; $i+=2) { 
    echo $i;
    echo '<br>';
}
echo '<hr>';
echo '<br>';

for ($i=1; $i <10 ; $i++) { 
    echo $i*10;
    echo '<br>';
}
echo '<hr>';
echo '<br>';

// 數列為100內的質數
$count=0;
for ($i=3; $i <100 ; $i++) {
    $check =true; 
    // 已經得知1一定可以整除，而其因數一定會在平方根以內，因此可省略
    for ($j=2; $j <= sqrt($i); $j++) { 
        if($i%$j==0){
            $check=false;
        }
        $count++;
    }
    if ($check==true) {
        echo $i.",";
    }
    $count++;
}
echo '迴圈次數:'.$count;
echo '<hr>';
echo '<br>';
?>
</body>
</html>