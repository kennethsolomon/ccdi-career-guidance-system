<?php
include_once './connection.php';

if (isset($_POST['btnViewStudent'])) {
    $username = $_POST['username'];
    $id = $_POST['id'];
    $sql = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $studentId = $row['id'];
            echo "Name: " . $row["firstName"] . "<br>";
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
    header("location: ./../viewStudentInfo.php?id=$id&studentId=$studentId&username=$username&search=1");
}
