<?php
session_start();
include_once('./connection.php');
$id = $_GET['id'];

// Get Date and Time
date_default_timezone_set("Asia/Manila");
//Test Trigger if Working
// $currentDate = '2020-02-21 00:00:00';
$getCurrentDate = date("Y-m-d");
$currentDate = $getCurrentDate . ' ' . '00:00:00';
$sql = "SELECT * FROM user Where userLevel=3";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $exp_date_at = $row["exp_date_at"];
        if ($exp_date_at < $currentDate) {
            $studentId = $row["id"];
            // //Update Expired Student
            $sql2 = "UPDATE user SET status='Expired' WHERE id='$studentId' AND status != 'Enrolled'";
            if ($conn->query($sql2) === TRUE) {
                header("location: ./../home.php?id=$id");
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }
    }
} else {
    echo "0 results";
}





mysqli_close($conn);
