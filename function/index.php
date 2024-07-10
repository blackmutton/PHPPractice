<style>
    * {
        font-family: 'Courier New', Courier, monospace;
    }
</style>
<h1>自訂函式</h1>

<?php
$a=['A','B','C','D','E'];
$b=[
    '姓名'=>'陳宇彤',
    '學號'=>'103001',
    '數學'=>90,
    '國文'=>67,
    '英文'=>56
];

stars();
stars('菱形',11);
stars('矩形',7);

// dd($a);
// dd($b);

function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function stars($shape='三角形',$stars=7){
    switch($shape){
        case "正三角形":
        case 'equilateral triangle':
            for($i=0;$i<$stars;$i++){
                for($k=0;$k<$stars-$i;$k++){
                    echo "&nbsp;";
                }
                for($j=0;$j<$i*2+1;$j++){
                    echo "*";

                }
                echo "<br>";
            }
            break;
            case '菱形':
            case 3:
                $odd=($stars%2==0)?$stars+1:$stars;
                $mid(($odd+1)/2)-1;

                for($i=0;$i<$stars;$i++){
                    if($i<=$mid){
                        $tmp=$i;
                    }else{
                        $tmp--;
                    }
                    for($k=0;$k<$mid;$k++){
                        echo "&nbsp;";
                    }
                    for($j=0;$j<$tmp*2+1;$j++){
                        echo "*";
                    }
                    echo "<br>";
                }
            break;
            case "矩形":
                for($row=1;$row<=$stars;$row++){
                    for($col=1;$col<=$stars;$col++){
                        if($row==1||$row==$n){
                            echo "*";
                        }else if($col==1||$col==$stars){
                            echo "*";
                        }else{
                            echo "&nbsp;";
                        }
                    }
                    echo "<br>";
                }
                break;
    }
}
?>