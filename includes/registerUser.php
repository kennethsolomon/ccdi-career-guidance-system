<?php
include_once './connection.php';

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$lastName = $_POST['lastName'];
$firstName = $_POST['firstName'];
$middleName = $_POST['middleName'];
$address = $_POST['address'];
$phoneNumber = $_POST['phoneNumber'];
$selectedCourse = $_POST['selectedCourse'];
$lastSchoolAttended = $_POST['selectedSchool'];
$status = $_POST['selectedStatus'];


if (isset($_POST['btnRegister'])) {

    $sql = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['registerStudent'] = 'Username Already Exist!';
        header('location: ./../home.php');
    } else {
        $sql = "INSERT INTO user (
        username, 
        password, 
        lastName, 
        firstName, 
        middleName, 
        address, 
        phoneNumber, 
        lastSchoolAttended,
        course,
        status,
        userLevel
        ) VALUES (
        '$username',
        md5('$password'),
        '$lastName',
        '$firstName',
        '$middleName',
        '$address',
        '$phoneNumber',
        '$lastSchoolAttended',
        '$selectedCourse',
        '$status',
        '3'
        )";

        $_SESSION['registerStudent'] = 'Registered Successfully!';

        if (mysqli_query($conn, $sql)) {
            header("location: ./../home.php?id=$id");
        } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
        $conn->close();
    }
}
