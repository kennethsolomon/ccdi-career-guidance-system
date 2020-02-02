<?php
include_once('./connection.php');

$id = $_GET['id'];
$eNum = 1;

$sql = "INSERT INTO examResult (studentId, examScore) VALUES ('$id', '0')";

if (mysqli_query($conn, $sql)) {
    header("location: ./../questions.php?id=$id&eNum=$eNum");
} else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
}

$conn->close();
