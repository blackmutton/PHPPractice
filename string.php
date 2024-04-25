<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>字串取代</h2>
    <ul>
        <li>將”aaddw1123”改成”*********”</li>
    </ul>
    <?php
    $s='aaddw1123';
    $s=str_replace(['a','a', 'd', 'd', 'w', '1', '1', '2','3'],'*',$s);
    echo $s;
    echo "<br>";

    $s='aaddw1123';
    $s=str_repeat("*",mb_strlen($s));
    echo $s;
    ?>
    <h2>字串分割</h2>
    <ul>
        <li>將”this,is,a,book”依”,”切割後成為陣列</li>
    </ul>
    <?php
    $s='this,is,a,book';
    $result=explode(",",$s);
    echo "<pre>";
    print_r($result);
    echo "</pre>";
    ?>
    <h2>字串組合</h2>
    <ul>
        <li>將上例陣列重新組合成“this is a book”</li>
    </ul>
    <?php
    $result=join(' ',$result);
    echo $result;
    ?>
    <h2>子字串取用</h2>
    <ul>
        <li>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</li>
    </ul>
    <?php
    $s='The reason why a great man is great is that he resolves to be a great man';
    $new=mb_substr($s,0,10);
    echo $new;
    echo "...";
    ?>
</body>
</html>