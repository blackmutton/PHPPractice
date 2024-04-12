<h2>for</h2>
<?php
/* 該scope尚未定義$i，故會出現錯誤訊息 */
// echo $i;
for ($i =0; $i <10; $i++) { 
    echo $i*10;
    echo '<br>';
}

echo '<br>';
echo $i;

echo '<hr>';
for ($i =-3; $i >-100; $i=$i*2-1) { 
    echo $i*10;
    echo '<br>';
}

echo '<br>';
echo $i;

?>
<h2>while</h2>
<?php

$score=10;
echo '原始成績='.$score;
while ($score<60) {
    $score=$score+10;
}

echo "<br>";
echo '調整結果='.$score;

echo '<br>';
$score=59;
echo '原始成績='.$score;
while($score >=0){
    $score-=6;
}

echo '<br>';
echo '調整結果='.$score;