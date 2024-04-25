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
    echo "<br>";
    $s='女性魔法使。50歲。父親是長身人，母親是精靈族。出身北方大陸。父母曾經擔任過宮廷魔術師，學院派出生的她立志要將地下城改造成能安全採集魔法用材料的場所。本作吐槽役、顏藝豐富，雖然有豐富的知識，但實際經驗不足而常把事情搞砸。第一次的死亡是被攻擊性史萊姆包覆頭部窒息而死。';
    $new=mb_substr($s,-11,10);
    echo $new;
    echo "...";
    ?>
    <h2>尋找字串與HTML、css整合應用</h2>
    <ul>
        <li>給定一個句子，將指定的關鍵字放大</li>
        <li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
        <li>請將上句中的 “程式設計” 放大字型或變色.</li>
    </ul>
   
    <?php
    $key='薪水';
    $color='red';
    $size='50px';
    $s="學會PHP網頁程式設計，薪水會加倍，工作會好找";
    $s=str_replace($key,"<span style='color:$color;font-size:$size'>$key</span>",$s);
    echo $s;
    ?>
</body>
</html>