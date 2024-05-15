<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>計算BMI</h1>
    <h2>使用GET</h2>
    <form action="bmi_result.php" method="get">
        <div>
            <label for="height">height</label>
            <input type="number" id="height" name="height">
        </div>
        <div>
            <label for="weight">weight</label>
            <input type="number" id="weight" name="weight">
        </div>
        <div>
            <input type="submit" value="submit">
            <input type="reset" value="reset">
        </div>
    </form>
    <h2>使用POST</h2>
    <form action="bmi_result.php" method="post">
        <div>
            <label for="height">height</label>
            <input type="number" id="height" name="height">
        </div>
        <div>
            <label for="weight">weight</label>
            <input type="number" id="weight" name="weight">
        </div>
        <div>
            <input type="submit" value="submit">
            <input type="reset" value="reset">
        </div>
    </form>
    <h2>使用a標籤來替代get</h2>
    <a href="bmi_result.php?height=180&&weight=100">計算BMI</a>
</body>
</html>