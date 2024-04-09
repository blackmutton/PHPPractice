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
        ?>
   
</body>
</html>