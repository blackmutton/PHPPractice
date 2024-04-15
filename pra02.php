<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>流程結構練習2024-04-15</title>
</head>
<body>
    <h1>九九乘法表-簡單</h1>
    <?php
    /* 會寫成巢狀是因為最外層的for ($i=1;$i<=9;$i++)是重覆的 */
    
    for($i=1 ; $i<=9;$i++){
        
        for($j=1; $j<=9; $j++){
          
            echo $i . " x " .$j ." = ".($i*$j);
            
        }   
        echo "<br>";
        /* 要跑完這裡，才會回到外面的迴圈 */
    }
    
    ?>
    <h2>九九乘法表-表格</h2>
    <style>
    table{
        border-collapse:collapse;
        /* margin:auto; */
        text-align:center;
        
    }
   /*  tr:nth-child(odd){
        background-color:grey;
    } */
    td:hover{
        font-size:x-large;
        color:red;
        background:white;
    }
    tr,td{
        padding:5px;
        border:1px solid black;
        font-size:20px;
        vertical-align:center;
    }
</style>
<?php
echo "<table>";
//table在最外面，不會經歷到迴圈
for($i=1 ; $i<=9;$i++){
    //總共有9行，所以tr在外
    echo "<tr>";
    for($j=1; $j<=9; $j++){
        //總共有9列，所以td在內
        
        echo "<td>". $i . " x " .$j ." = ".($i*$j)."</td>";
        
    }
    echo "</tr>";
}
echo "</table>";
?>
<h2>九九乘法表-棋盤式表格</h2>
<style>
    #grid table{
        border-collapse: collapse;
    }
    #grid td{
        border:1px solid gray;
        padding: 3px 6px;
        font-size:18px;
    }
    #grid tr:nth-child(1),
    #grid td:nth-child(1){
        background:black;
        color:#CCC;
    }
</style>
<?php
echo "<table id='grid'>";
for($i=0 ; $i<=9;$i++){ 

    echo "<tr>";

    for($j=0; $j<=9; $j++){
        echo "<td>";
        if($i==0 && $j==0 || ($i!=0&&$j>$i)){
            //if第一個判斷式須將範圍限縮，否則會無法再繼續下去
            //增加$i!=0&&$j>$i的判斷式是為了讓表格數字呈現對角線
            echo " ";
        }else if($i==0){
            //控制第一行的表現，若不特別設定會呈現$i*$j(0*$j)的值
            echo $j;
        }else if($j==0){
            //控制第一列的表現，若不特別設定會呈現$i*$j($i*0)的值
            echo $i;
        }else{
            echo ($i*$j);
         }
        
         echo "</td>";
    }
    echo "</tr>";
}

    //另一個思路
    /* if($i*$j!=0){
        //一開始便限定只有在什麼情況下才印出$i*$j
            echo $i*$j;
        }else if($j==0 && $i!=0){
            echo $i;
        }else if($j!=0 && $i==0){
            echo $j;
        }else{
            echo " ";
        } */

echo "</table>";
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>