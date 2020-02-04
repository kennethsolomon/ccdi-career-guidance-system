<?php
include_once('./connection.php');

$id = $_GET['id'];
$examId = $_GET['examId'];

// Get Date and Time
date_default_timezone_set("Asia/Manila");
$dateOfExamination = date("Y/m/d-h:i:sa");

// Get the Score
$sql = "SELECT * FROM examResult WHERE id='$examId' AND studentId='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $examScore = $row['examScore'];
    }
} else {
    echo "0 results";
}

// Suggested Course; Based on Score
if ($examScore > 15) {
    $suggestedCourse = 'Computer Science';
} else if ($examScore > 10 && $examScore <= 15) {
    $suggestedCourse = 'Information Technology';
} else if ($examScore > 5 && $examScore <= 10) {
    $suggestedCourse = 'BSIS';
} else {
    $suggestedCourse = 'ACT';
}

// Add data to the student
$sql2 = "UPDATE user SET score='$examScore', dateOfExamination='$dateOfExamination', suggestedCourse='$suggestedCourse' WHERE id='$id'";

if ($conn->query($sql2) === TRUE) {
    header("location: ./logout.php");
} else {
    echo "Error updating record: " . $conn->error;
}




mysqli_close($conn);
