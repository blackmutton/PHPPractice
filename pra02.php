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
    tr:nth-child(odd){
        background-color:grey;
    }
    td:hover{
        font-size:x-large;
        color:red;
    }
    td{
        padding:5px;
        border:1px solid black;
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
</body>
</html>