<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab7 No.2 ✨</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <label>Select a month :</label>
    <form id="form1" action="index.php" method="get">
        <select id="invalue" name="invalue">
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
        </select>
        <button type="submit">Submit</button>
    </form>
    <?php
    $DayOfMonth = array( // Key => Value
        1 => 31,
        2 => 29,
        3 => 31,
        4 => 30,
        5 => 31,
        6 => 30,
        7 => 31,
        8 => 31,
        9 => 30,
        10 => 31,
        11 => 30,
        12 => 31
    );

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['invalue'])) {
        $month = $_GET['invalue'];
    } else {
        $month = date('n');
    }
    $num_day = $DayOfMonth[$month];

    // แสดงชื่อเดือน
    echo "<h1>" . date('F', mktime(0, 0, 0, $month, 1, 2024)) . "</h1>";

    // แสดงตารางปฏิทิน
    echo "<table>";
    echo "<tr>";
    echo "<th>Sun.</th>";
    echo "<th>Mon.</th>";
    echo "<th>Tue.</th>";
    echo "<th>Wed.</th>";
    echo "<th>Thu.</th>";
    echo "<th>Fri.</th>";
    echo "<th>Sat.</th>";
    echo "</tr>";

    $first_day = date('w', mktime(0, 0, 0, $month, 1, 2024));
    if ($first_day > 0) {
        for ($i = 0; $i < $first_day; $i++) {
            echo "<td>&nbsp;</td>";
        }
    }
    // วนลูปผ่านวันในเดือน
    for ($i = 1; $i <= $num_day; $i++) {
        $day = date('w', mktime(0, 0, 0, $month, $i, 2024));

        echo "<td>$i</td>";

        if ($day == 6) {
            echo "</tr>";
            echo "<tr>";
        }
    }

    if (date('w', mktime(0, 0, 0, $month, $num_day, 2024)) < 6) {
        echo str_repeat("<td>&nbsp;</td>", 6 - date('w', mktime(0, 0, 0, $month, $num_day, 2024)));
    }
    echo "</tr>";
    echo "</table>";

    ?>

</body>

</html>
