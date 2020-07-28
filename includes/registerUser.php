<?php
session_start();
include_once './connection.php';

// Get Date and Time
date_default_timezone_set("Asia/Manila");
// $currentDate = date("Y/m/d-h:i:s");
$currentDate = date("Y/m/d");
$monthDate = date("md");
$month = date("F");
$year = date("Y");

$id = $_POST['id'];
//$username = $_POST['username'];
//$password = $_POST['password'];
$lastName = $_POST['lastName'];
$firstName = $_POST['firstName'];
$base_username = $lastName.$firstName.$monthDate;
$base_password = $lastName.$firstName.$monthDate;
$username = strtolower($base_username);
$password = strtolower($base_password);
$middleName = $_POST['middleName'];
$address = $_POST['address'];
$email = $_POST['email'];
$yearGraduated = $_POST['yearGraduated'];
$phoneNumber = $_POST['phoneNumber'];
$selectedCourse = $_POST['selectedCourse'];
$lastSchoolAttended = $_POST['selectedSchool'];
$status = $_POST['selectedStatus'];
//$municipality = $_POST['selectedMunicipality'];
$created_at = $currentDate;

if (isset($_POST['btnRegister'])) {

    $sql = "SELECT * FROM municipality WHERE school='$lastSchoolAttended'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $school = $row['school'];
            $municipality = $row['name'];

        }
    }

    $sql = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['registerStudent'] = 'Username Already Exist!';
        $url = "./../home.php?id=$id";
        $url = str_replace(PHP_EOL, '', $url);
        header("Location: $url");
    } else {
        $sql = "INSERT INTO user (
        username, 
        password, 
        lastName, 
        firstName, 
        middleName, 
        address, 
        email, 
        yearGraduated, 
        phoneNumber, 
        lastSchoolAttended,
        course,
        status,
        userLevel,
        month,
        year,
        municipality,
        created_at
        ) VALUES (
        '$username',
        md5('$password'),
        '$lastName',
        '$firstName',
        '$middleName',
        '$address',
        '$email',
        '$yearGraduated',
        '$phoneNumber',
        '$school',
        '$selectedCourse',
        '$status',
        '3',
        '$month',
        '$year',
        '$municipality',
        '$created_at'
        )";

        if (mysqli_query($conn, $sql)) {
            $_SESSION['registerStudent'] = 'Registered Successfully!';
            $url = "./../home.php?id=$id";
            $url = str_replace(PHP_EOL, '', $url);
            header("Location: $url");
        } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
        $conn->close();
    }
}
