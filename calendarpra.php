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
    <?php
    $month=3;
    echo "月份:".$month;
    // 當月一號的時間戳
    $firstDay=strtotime(date("Y-$month-1"));
    // 得到當月一號是星期幾，數字0~6
    $firstWeekStartDay=date("w",$firstDay);
    echo "第一周的開始是第".$firstWeekStartDay."日";
    // 得到該月為幾天
    $days=date("t",$firstDay);
    // 得到當月最後一天的時間戳
    $lastDay=strtotime(date("Y-$month-$days"));
    echo "最後一天是".date("Y-m-d",$lastDay);
    
    
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
    $date=1;

    for($i=0;$i<6;$i++){
        echo "<tr>";
        for($j=0;$j<7;$j++){
            echo "<td>";
            if($date>$days||($i==0&&$j<$firstWeekStartDay)){
                echo "&nbsp;";
            }else{
                echo $date;
                $date++;
            }
            echo "</td>";
        }
        echo "</tr>";
        // 如果已經到本月的最後一天，則結束迴圈節省效能，但第六行若為空白則會全部不見
        if($date>$days){
            break;
        } 
    }
    echo "</table>";
    ?>
</body>
</html>