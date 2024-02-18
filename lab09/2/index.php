<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/4ec3c0fbf7.js" crossorigin="anonymous"></script>
    <title>Lab9 No.2 ✨</title>
</head>
<body>
    <?php
        include 'db.php';
        $res = mysqli_query($conn, "SELECT * FROM `course`;");  
    ?>
    <div class="container">
        <h1 style="text-align: center;">All Course deatil.</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Dept Name</th>
                <th>Credits</th>
                <th>Opitons</th>
            </tr>
            <?php
                while ($row = mysqli_fetch_assoc($res)) {
                    echo '<tr>';
                    echo '<td>' . $row['course_id'] . '</td>';
                    echo '<td>' . $row['title'] . '</td>';
                    echo '<td>' . $row['dept_name'] . '</td>';
                    echo '<td>' . $row['credits'] . '</td>';
                    echo '<td><div class="btn-group"><a href="form-edit.php?id=' . $row['course_id'] . '" style="color: blue;"><i class="fa-solid fa-pen"></i></a><a href="./src/delete.php?id=' . $row['course_id'] . '" style="color: red;"><i class="fa-solid fa-trash"></i></a></div></td>';
                    echo '</tr>';
                }
            ?>
        </table>
    </div>
</body>
</html>
