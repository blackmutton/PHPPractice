<style>
    * {
        font-family: 'Courier New', Courier, monospace;
    }
</style>
<h1>自訂函式</h1>
<?php
include "db.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>自訂函式</title>
</head>
<body>
    <?php
    dd(all('students',"where `id`<5"));
    dd(find('students',['uni_id'=>'F200000035', 'parents' => '孔進豐']));
    dd(find('students',2));
    ?>
</body>
</html>