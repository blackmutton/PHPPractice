<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>BMI計算結果</h1>

    <?php
    if(!empty($_POST)){
        if(empty($_POST['height'])){
            echo "請輸入正確的身高";
        }else{
            $height = $_POST['height'];
        }
        if(empty($_POST['weight'])){
            echo "請輸入正確的身高";
        }else{
            $weight = $_POST['weight'];
        }
    }else{
        if(empty($_GET['height'])){
            echo "請輸入正確的身高";
        }else{
            $height = $_GET['height'];
        }
        if(empty($_GET['weight'])){
            echo "請輸入正確的身高";
        }else{
            $weight = $_GET['weight'];
        }
    }

    if(!empty($_POST)||!empty($_GET)){
        $method = !empty($_POST)?$_POST:$_GET;
        if(empty($method['height'])){
            echo "請輸入正確的身高";
        }else{
            $height = $method['height'];
        }
        if(empty($method['weight'])){
            echo "請輸入正確的身高";
        }else{
            $weight = $method['weight'];
        }
    }

    echo "<hr>";

    if(!empty($height)&&!empty($weight)){
        $bmi=$weight/($height/100)*($height/100);
        echo "您的bmi為".round($bmi,2);
    }else{
        echo "請輸入正確的身高與體重";
    }
    ?>
</body>
</html>