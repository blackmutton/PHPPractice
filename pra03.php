<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>畫星星</title>
    <style>
        *{
            font-family:'Courier New', 'Courier',monospace;
        }
    </style>
</head>
<body>
<h2>直角三角形</h2>

<?php
/* for($i=0;$i<5;$i++){
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
} */
$stars=5;
for($i=1;$i<=$stars;$i++){
    //控制幾行
    for($j=1;$j<=$i;$j++){
    //控制一行有多少顆星星
    echo "*";
}
    echo "<br>";
}
?>

<h2>倒直角三角形</h2>
<?php
for($i=$stars;$i>0;$i--){
    //外層最為關鍵，因此先調整外層
    for($j=1;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}
?>

<h2>正三角形</h2>
<?php
for($i=0;$i<$stars;$i++){
    for($k=0;$k<$stars-$i;$k++){
        //空白數為4,3,2,1，剛好是$stars-1-$i的遞減
        echo "&nbsp;";
        //unbreak space
        //為讓星星能對齊，因此須將自行改成等寬字型
    }
    for($j=0;$j<$i*2+1;$j++){
        //*的數量剛好為$i*2+1
        echo "*";
    }
    echo "<br>";
}

?>
<h2>菱形</h2>
<?php
//菱形草稿版
/* for($i=0;$i<$stars;$i++){
    for($k=0;$k<$stars-1-$i;$k++){      
        echo "&nbsp;";    
    }
    for($j=0;$j<$i*2+1;$j++){
        echo "*";
    }
    echo "<br>";
}
for($i=$stars-1;$i>0;$i--){
    for($k=0;$k<$stars-$i;$k++){      
        echo "&nbsp;";    
    }
    for($j=0;$j<$i*2-1;$j++){
        echo "*";
    }
    echo "<br>";
} */
$odd=($stars%2==0)?$stars+1:$stars;
$mid=(($odd+1)/2)-1;

/* 
5 3
7 4
但從0開始算
*/
for($i=0;$i<$stars;$i++){
    if($i<=$mid){
    $tmp=$i;
}else{
    $tmp--;
}

for($k=0;$k<$mid-$tmp;$k++){      
    echo "&nbsp;";    
}
for($j=0;$j<$tmp*2+1;$j++){
    echo "*";
}
echo "<br>";
}
?>
</body>
</html>
