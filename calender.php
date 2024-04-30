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
$year=date('Y');
echo "年份:".$year;
echo "<br>";
echo "月份:".$month;
echo "<br>";
$firstDay=strtotime(date("Y-$month-1"));

// date("w")代表星期幾，數字為0~6
$firstWeekStartDay=date("w",$firstDay);
echo "第一周的開始是第".$firstWeekStartDay."日";
// 得到該月應有天數
$days=date("t",$firstDay);
$lastDay=strtotime(date("Y-$month-$days"));
echo "最後一天是".date("Y-m-d",$lastDay);
$bday="1999-04-01";
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
        $date=$year.'-'.$month.'-'.$i*7+$j-($firstWeekStartDay-1);
        $replace=mb_substr($bday,0,4);
        $replaceTo=str_replace($replace,date("Y"),$bday);
        $spDate=strtotime($replaceTo);
        $dateSec=strtotime($date);
        if($i==0 && $j>=$firstWeekStartDay ){
            if($spDate==$dateSec){
                echo "<td style=background-color:yellow;font-weight:bolder;font-size:24px;'>";
            }else if(date("w",strtotime($date))==0||date("w",strtotime($date))==6){
                echo "<td style='background-color:red;'>";
            }else{
                echo "<td>";
            } 
            echo    $i*7+$j-($firstWeekStartDay-1);
            echo "</td>";
        }else if($i>0){
            if($spDate==$dateSec){
                echo "<td style=background-color:yellow;font-weight:bolder;font-size:24px;'>";
            }else if(date("w",strtotime($date))==0||date("w",strtotime($date))==6){
                echo "<td style='background-color:red;'>";
            }else{
                echo "<td>";
            }
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
<style>
    .block-table{
        display:flex;
        flex-wrap:wrap;
        width:357px;
        
    }
    .item{
        margin-left:-1px;
        margin-top:-1px;
        display:inline-block;
        width:50px;
        height:50px;
        border:1px solid lightgreen;
        /* transition在hover也有是為了讓淡出淡出更自然，若是這邊沒有便會造成滑鼠一移開，效果馬上消失 */
        transition:all .3s;
        background:white;
    }
    .item-header{
    margin-left:-1px;
    margin-top:-1px;
    display:inline-block;
    width:50px;
    height:25px;
    border:1px solid lightgreen;
    text-align: center;
    background-color: darkgreen; 
    color:lightgreen
}
.holiday{
    background-color:red;
}

.item:hover{
    background-color:yellow;
    font-size:26px;
    font-weight:bold;
    color:blue;
    transform:scale(1.3);
    transition:all .3s;
    z-index:10;
}
</style>
<?php


$dates=[];
for($i=0;$i<42;$i++){
    
    // 這樣寫連上個月跟下個月的日期都會出現
    $diff=$i-$firstWeekStartDay;
    $dates[]=date("Y-m-d",strtotime("$diff days", $firstDay));
    
}

/* //這樣寫能只呈現該月的日期 
for($i=0;$i<42;$i++){
    if($i>=$firstWeekStartDay && $i <= $days){
        $diff=$i-$firstWeekStartDay;
        $dates[]=date("Y-m-d",strtotime("$diff days", $firstDay));
    }else{
        $dates[]="&nbsp;";
    }
    
    
} */

echo "<pre>";
print_r($dates);
echo "</pre>";

echo "<div class='block-table'>";
echo "<div class='item-header'>日</div>";
echo "<div class='item-header'>一</div>";
echo "<div class='item-header'>二</div>";
echo "<div class='item-header'>三</div>";
echo "<div class='item-header'>四</div>";
echo "<div class='item-header'>五</div>";
echo "<div class='item-header'>六</div>";
foreach($dates as $day){
    $format=explode("-",$day)[2];
    $w=date("w",strtotime($day));
    if($w==0 || $w==6){

        echo "<div class='item holiday'>$format</div>";
    }else{

        echo "<div class='item'>";
        echo "<div class='date'>$format</div>";
        echo "</div>";
    }
}
echo "</div>";
/* foreach($dates as $day){
    // 由於空值不符合"Y-m-d"的形式，所以在使用explode("-",$day)[2]處理時會發生錯誤，因此需要再多一個判斷式
    if($day!="&nbsp;"){
    $format=explode("-",$day)[2];
    $w=date("w",strtotime($day));
    if($w==0||$w==6){
        echo "<div class='item holiday'>$format</div>";
    }else{
        
        echo "<div class='item'>";
        echo "<div class='date'>$format</div>";
        echo "</div>";
    }
    }else{
        // 如果是空值的話一樣要讓格子輸出，否則格式會跑掉
        echo "<div class='item'></div>";
    }
}
echo "</div>"; */

?>
</html>