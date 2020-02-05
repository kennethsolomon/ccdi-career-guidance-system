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
    
    $url="./../viewStudentInfo.php?id=$id&studentId=$studentId&username=$username&search=1";
    $url=str_replace(PHP_EOL, '', $url);
    header("Location: $url");
}

if (isset($_POST['btnStudentInfoUpdate'])) {
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $username = $_POST['username'];
    $password = $_POST['lastName'];
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['address'];
    $status = $_POST['status'];
    $dateOfExamination = $_POST['dateOfExamination'];
    $lastSchoolAttended = $_POST['lastSchoolAttended'];
    $course = $_POST['course'];
    $suggestedCourse = $_POST['suggestedCourse'];
    $score = $_POST['examScore'];
    $accountLock = $_POST['accountLock'];

}