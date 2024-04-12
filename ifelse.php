<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "ABC";

    ?>
   <div>
    $a=10;<br>
    $b=50;<br>
   </div>
   <a href="./index.html">回首頁</a>
        <h4>交換後</h4>
        <?php
        $a=10;
        $b=50;
        
        $c=$a;
        $a=$b;
        $b=$c;

        echo '$a=' .$a;
        echo "<br>";
        echo '$b=' .$b;

        echo "<hr>";

        $score=70;

        $level=($score>=60)?'及格':'不及格';
        echo "成績為:".$score;
        echo "<br>";
        echo "是否及格:".$level;

        // if($score>=60){
        //     $level='及格';
        // }else{
        //     $level='不及格';
        // }
        echo "<hr>";
        ?>
        
        <h3>使用if...else來得到成績的等級</h3>
        <ul>
            <li>100~90 => A</li>
            <li>89~80 => B</li>
            <li>79~70 => C</li>
            <li>69~60 => D</li>
            <li>59~0 => E</li>
        </ul>

        <?php
        $score=85;
        
        if($score>=90 && $score<=100){
            $level='A';
        }else if($score>=80 && $score<=89){
            $level='B';
        }else if($score>=70 && $score<=79){
            $level='C';
        }else if($score>=60 && $score<=69){
            $level='D';
        }else if($score>=0 && $score<=59){
            $level='E';
        }else{
            $level='成績須在0~100之間,請重新輸入';
        }

        echo '成績為：'.$score;
        echo '<br>';
        echo '等級為：'.$level;
        echo '<br>';

        $words='';
        switch ($level) {
            case 'A':
            echo $words='<b>成績優異</b>';
                break;
            case 'B':
            echo $words='<b>用功努力</b>';
                break;
            case 'C':
            echo $words='<b>加油!再接再厲</b>';
                break;
            case 'D':
            echo  $words='<b>追求最佳進步</b>';
                break;
            case 'E':
            echo $words='<b>請認真唸書</b>';
                break;
            default:
            echo $words='<b>成績輸入錯誤</b>';
                break;
        }
        ?>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
   
</body>
</html>