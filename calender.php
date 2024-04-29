<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse:collapse;
            /* double樣式至少需要3px */
            border:3px double blue;

        }
        td{
            padding:5px 10px;
            border:1px solid lightgreen;
        }
    </style>
</head>
<body>
    <h2>線上月曆製作</h2>
<ul>
    <li>以表格方式呈現整個月份的日期</li>
    <li>可以在特殊日期中顯示資訊(假日或紀念日)</li>
    <li>嘗試以block box或flex box的方式製作月曆</li>
</ul>
<?php
$month=4;
echo "月份:".$month;
$firstDay=strtotime(date("Y-$month-1"));
echo "第一天為$firstDay";
// date("w")代表星期幾，數字為0~6
$firstWeekStartDay=date("w",$firstDay);
echo "第一周的開始是第".$firstWeekStartDay."日";
// 得到該月應有天數
$days=date("t",$firstDay);
$lastDay=strtotime(date("Y-$month-$days"));
echo "最後一天是".date("Y-m-d",$lastDay);;

echo "<table>";
echo "<tr>";
echo "<td>日</td>";
echo "<td>一</td>";
echo "<td>二</td>";
echo "<td>三</td>";
echo "<td>四</td>";
echo "<td>五</td>";
echo "<td>六</td>";
echo "</tr>";
for($i=0;$i<6;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        if($i==0 && $j>=$firstWeekStartDay ){
            echo "<td>";
            echo    $i*7+$j-($firstWeekStartDay-1);
            echo "</td>";
        }else if($i>0){
            echo "<td>";
            if($i*7+$j-($firstWeekStartDay-1)<=$days){
                echo $i*7+$j-($firstWeekStartDay-1);
            }else{
                echo "&nbsp;";
            }
            echo "</td>";
            
        }else{
            echo "<td></td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>