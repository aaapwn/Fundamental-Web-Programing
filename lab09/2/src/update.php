<?php
include '../db.php';
$id = $_POST['id'];
$course_id = $_POST['course_id'];
$title = $_POST['title'];
$dept = $_POST['dept'];
$credits = $_POST['credits'];
$sql = "UPDATE `course` SET `course_id` = '$course_id', `title` = '$title', `dept_name` = '$dept', `credits` = '$credits' WHERE `course_id` = '$id';";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record updated successfully');</script>";
    header('Refresh: 0; url=../');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
