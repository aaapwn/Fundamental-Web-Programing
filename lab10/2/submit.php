<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Lab10 No.1 ✨</title>
</head>
<body>
    <?php include 'db.php'; ?>
    <?php
        $ans = $db->query("SELECT QID, Correct from questions ORDER BY QID;");
        $score = 0;
        for ($i = 1; $i <= 10; $i++) {
            $row = $ans->fetchArray(SQLITE3_ASSOC);
            if ($_POST["q$i"] == $row['Correct']) {
                $score++;
            }
        }
        echo "<div class='container'>";
        echo "<h1>Your score is $score/10</h1>";
        echo "<a href='./'>Back</a>";
        echo "</div>";
    ?>
    <script>
        localStorage.removeItem('answers');
    </script>
</body>
</html>
