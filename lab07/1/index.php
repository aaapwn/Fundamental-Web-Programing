<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lab7 No.1 ✨</title>
</head>

<body>
    <form id="form1" action="index.php" method="get">
            <label>Enter a number :</label>
            <input type="text" id="invalue" name="invalue" value="0" />
            <button type="submit">Submit</button>
    </form>
    <div class="display">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['invalue'])) {
            $number = $_GET['invalue'];
            $v = intval($number);
            echo '<h3 style="text-align: center;">ตารางสูตรคูณแม่'. $v . "</h3>";
            echo "<table>";
            for ($i = 1; $i <= 12; $i++) {
                echo "<tr>";
                echo "<td>" . $v . "</td>";
                echo "<td>x</td>";
                echo "<td>" . $i . "</td>";
                echo "<td>=</td>";
                echo "<td>" . ($v * $i) . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        ?>
    </div>
</body>

</html>
