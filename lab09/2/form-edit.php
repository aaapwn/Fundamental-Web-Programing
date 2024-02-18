<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lab9 No.2 ✨</title>
</head>
<body>
    <?php
        include 'db.php';
        $id = $_GET['id'];
        $res = mysqli_query($conn, "SELECT * FROM `course` WHERE `course_id` = '$id';");
        $row = mysqli_fetch_assoc($res);
    ?>
    <div class="container">
        <form action="./src/update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['course_id']; ?>">
            <div>
                <label for="ID">ID: </label>
                <input type="text" name="course_id" id="course_id" value="<?php echo $row['course_id']; ?>">
            </div>
            <div>
                <label for="title">Title: </label>
                <input type="text" name="title" id="title" value="<?php echo $row['title']; ?>">
            </div>
            <div>
                <label for="dept">Dept Name: </label>
                <input type="text" name="dept" id="dept" value="<?php echo $row['dept_name']; ?>">
            </div>
            <div>
                <label for="credits">Credits: </label>
                <input type="text" name="credits" id="credits" value="<?php echo $row['credits']; ?>">
            </div>
            <div>
                <input type="submit" value="Update" class="btn btn-green">
            </div>
        </form>
    </div>
</body>
</html>
