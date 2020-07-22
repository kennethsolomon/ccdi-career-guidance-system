<?php
// Total Enrolled
$dataTable = "SELECT * FROM user WHERE userLevel = '3' && status = 'Enrolled'";
$resultEnrolled = mysqli_query($conn, $sqlEnrolled);

if (mysqli_num_rows($resultEnrolled) > 0) {
    $totalStudent = mysqli_num_rows($resultEnrolled);
} else {
    $totalStudent = 0;
}

?>
