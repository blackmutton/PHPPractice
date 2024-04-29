<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dynamic Calendar</title>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        border: 1px solid black;
        padding: 10px;
        text-align: center;
    }
    .week {
        background-color: #ccc;
    }
</style>
</head>
<body>

<form method="post">
    <label for="month">Choose a month:</label>
    <select id="month" name="month">
        <?php
        for ($month = 1; $month <= 12; $month++) {
            echo "<option value='$month'>$month</option>";
        }
        ?>
    </select>
    <input type="submit" value="Generate Calendar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $month = $_POST['month'];

    echo "<h2>Calendar for Month $month</h2>";

    $firstDay = strtotime(date("Y-$month-1"));
    $firstWeekStartDay = date("w", $firstDay);
    echo "<p>第一周的開始是第 $firstWeekStartDay 日</p>";

    $days = date("t", $firstDay);
    $lastDay = strtotime(date("Y-$month-$days"));
    echo "<p>最後一天是 " . date("Y-m-d", $lastDay) . "</p>";

    echo "<table>";
    echo "<tr class=\"week\">";
    echo "<td>日</td>";
    echo "<td>一</td>";
    echo "<td>二</td>";
    echo "<td>三</td>";
    echo "<td>四</td>";
    echo "<td>五</td>";
    echo "<td>六</td>";
    echo "</tr>";

    $date = 1;
    for ($i = 0; $i < 6; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 7; $j++) {
            echo "<td>";
            if ($date > $days || ($i == 0 && $j < $firstWeekStartDay)) {
                echo "&nbsp;";
            } else {
                echo $date;
                $date++;
            }
            echo "</td>";
        }
        echo "</tr>";
        if ($date > $days) {
            break;
        }
    }
    echo "</table>";
}
?>

</body>
</html>
