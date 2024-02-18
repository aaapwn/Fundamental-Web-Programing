<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lab9 No.1 ✨</title>
</head>

<body>
    <div class="container">
        <form action="index.php" method="post">
            <?php
            $servername = "localhost";
            $username = "S185E";
            $password = "";
            $dbname = "s185e";
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            if (isset($_POST['record'])) {
                $record = $_POST['record'];

                $sql = "SELECT * FROM `course`;";
                $result = mysqli_query($conn, $sql);

                $counter = 1;
                $exist = false;

                while ($row = mysqli_fetch_assoc($result)) {
                    if ($counter == $record) {
                        echo '<div class="form-section">';
                        echo '<label for="ID">ID: </label>';
                        echo '<input type="text" name="ID" id="ID" disabled value="'. $row['course_id'] .'">';
                        echo '</div>';
                        echo '<div class="form-section">';
                        echo '<label for="title">Title: </label>';
                        echo '<input type="text" name="ID" id="title" disabled value="'. $row['title'] .'">';
                        echo '</div>';
                        echo '<div class="form-section">';
                        echo '<label for="Tilt">Dept Name: </label>';
                        echo '<input type="text" name="Tilt" id="dept" disabled value="'. $row['dept_name'] .'">';
                        echo '</div>';
                        echo '<div class="form-section">';
                        echo '<label for="Credits">Credits: </label>';
                        echo '<input type="text" name="Credits" id="Credits" disabled value="'. $row['credits'] .'">';
                        echo '</div>';
                        $exist = true;
                    }
                    $counter++;
                }

                if (!$exist) {
                    echo '<div class="form-section">';
                    echo '<input style="width: 100%; text-align: center;" value="Record not found" disabled>';
                    echo '</div>';
                }

            }
            mysqli_close($conn);
            ?>
            <div class="form-section">
                <label for="record">Enter a record number: </label>
                <input type="number" name="record" id="record">
            </div>
            <div class="form-section">
                <button type="submit">Search</button>
            </div>
        </form>
    </div>

</body>

</html>
