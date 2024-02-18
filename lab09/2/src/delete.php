<?php
include '../db.php';
$id = $_GET['id'];
$sql = "DELETE FROM `course` WHERE `course_id` = '$id';";

$conn->query("SET FOREIGN_KEY_CHECKS=0;");
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record deleted successfully');</script>";
    header('Refresh: 0; url=../');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->query("SET FOREIGN_KEY_CHECKS=1;");
