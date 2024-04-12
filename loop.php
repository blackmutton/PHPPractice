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
echo '<hr>';
$score=59;
echo '原始成績='.$score;
while($score >=0){
    $score-=6;
}

echo '<br>';
echo '調整結果='.$score;
?>

<h2>巢狀結構</h2>
<?php

for($i=0 ; $i<10 ; $i++){
    echo $i*10;

    if($i>5){
        echo "執行一半了...";
    }
    echo '<br>';
}
echo '<br>';
echo '<hr>';

for($i=0 ; $i<10 ; $i++){
    echo $i*10;
    echo '<br>';
    if($i>5){
        echo "執行一半了...";
    }
    
}
echo '<br>';
echo '<hr>';

$executehalf=false;

for($i=0 ; $i<10 ; $i++){
    echo $i*10;
    
    if($i>5 && $executehalf==false){
        echo "執行一半了...";
        $executehalf=true;
    }
    echo '<br>';
}
echo '<br>';
echo '<hr>';
/* if中只放變數的應用 */
/* 在php中0跟null代表false，其他都代表true，包含小數、負數等等 */
$a=true;
if($a){
    echo 'True';
}else{
    echo 'False';
}
?>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>