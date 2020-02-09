<?php
include_once('./connection.php');

$id = $_GET['id'];
$eNum = 1;

$sql = "INSERT INTO examResult (studentId, examScore, eNum) VALUES ('$id', '0', 0)";

if (mysqli_query($conn, $sql)) {
    $sql2 = "UPDATE user SET status='Taked Exam'WHERE id = '$id'";
    if ($conn->query($sql2) === TRUE) {
        header("location: ./../questions.php?id=$id&examId=&eNum=$eNum");
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
}

$conn->close();