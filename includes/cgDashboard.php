<?php
$sql = "SELECT * FROM user WHERE userLevel = '3' && status = 'Enrolled'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $totalStudent = mysqli_num_rows($result);
} else {
    $totalStudent = 0;
}
mysqli_close($conn);
