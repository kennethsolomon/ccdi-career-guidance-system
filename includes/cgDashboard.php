<?php
$sql = "SELECT * FROM user WHERE userLevel = '3'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $totalStudent = mysqli_num_rows($result);
} else {
}
mysqli_close($conn);