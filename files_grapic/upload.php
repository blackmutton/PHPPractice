<?php
include "db.php";
session_start();
/**
 * 1.建立表單
 * 2.建立處理檔案程式
 * 3.搬移檔案
 * 4.顯示檔案列表
 */

 if(!empty($_FILES)){
    // echo "檔案名稱：".$_FILES['file']['name']."<br>";
    // echo "檔案類型：".$_FILES['file']['type']."<br>";
    // echo "檔案大小：".$_FILES['file']['size']."<br>";
    // echo "暫存名稱：".$_FILES['file']['tmp_name']."<br>";
    // print_r($_FILES);
    
    if(move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name'])){
        // $_SESSION['file'][]=$_FILES['file']['name'];
        // print_r($_SESSION);
        $data['name']=$_FILES['file']['name'];
        $data['type']=$_FILES['file']['type'];
        $data['size']=$_FILES['file']['size'];
        save("images",$data);
        echo "檔案上傳成功";
    }else{
        echo "檔案上傳失敗";
    } 
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>檔案上傳</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
 <h1 class="header">檔案上傳練習</h1>
 <!----建立你的表單及設定編碼----->
<form action="upload.php" method="post"  enctype="multipart/form-data">
<input type="file" name="file" id="">
<input type="submit" name="" id=""value="上傳">
</form>




<!----建立一個連結來查看上傳後的圖檔---->  
<?php
/* if(!empty($_FILES)){
    echo "<img src='images/{$_FILES['file']['name']}'>";
} */
/* if(isset($_SESSION['file'])){
    foreach($_SESSION['file'] as $file){
        echo "<img src='images/{$file}' class='upload-img'";
    }
} */

/* $files=scandir("images/");
unset($files[0],$files[1]);
foreach($files as $file){
    echo "<img src='images/{$file}' class='upload-img'>";
} */
$images=all('images');
foreach($images as $image){
    echo "<div class='upload-img'>";
    echo "<a class='pen' href='edit_image.php?id={$image['id']}'><i class='fa-solid fa-pen-to-square'></i></a>";
    echo "<a class='del' href='del_image.php?id={$image['id']}'><i class='fa-solid fa-xmark'></i></a>";
    echo "<img src='images/{$image['name']}' class='upload-img'>";
    echo "</div>";
}
?>


</body>
</html>