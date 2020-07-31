<?php
// Connection 
include_once('./connection.php');

// Get Date and Time
date_default_timezone_set("Asia/Manila");
$currentDate = date("Y/m/d");
$year = date("Y");

$data = $_GET['data'];


if($data == 'school'){
$school = $_GET['school'];
$filename = "$school-$currentDate.xls"; // File Name
// Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");
if($school == ''){
    $sql = "SELECT lastName, firstName, middleName, lastSchoolAttended, municipality, yearGraduated FROM user WHERE userLevel = 3  AND year = '$year'";
}else{
    $sql = "SELECT lastName, firstName, middleName, lastSchoolAttended, municipality, yearGraduated FROM user WHERE userLevel = 3 AND lastSchoolAttended='$school' AND year = '$year'";
}
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    $flag = false;
    while ($row = mysqli_fetch_assoc($result)) {
    if (!$flag) {
    // display field/column names as first row
    echo implode("\t", array_keys($row)) . "\r\n";
    $flag = true;
    }
    echo implode("\t", array_values($row)) . "\r\n";
    }
    } else {
    echo "0 results";
    }
    mysqli_close($conn);

}
if($data == 'course'){
$course = $_GET['course'];
$filename = "$course-$currentDate.xls"; // File Name
// Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");
if($course == ''){
    $sql = "SELECT lastName, firstName, middleName, address, lastSchoolAttended, course FROM user WHERE userLevel = 3  AND year = '$year'";
}else{
    $sql = "SELECT lastName, firstName, middleName, address, lastSchoolAttended, course FROM user WHERE userLevel = 3 AND course='$course'  AND year = '$year'";
}
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    $flag = false;
    while ($row = mysqli_fetch_assoc($result)) {
    if (!$flag) {
    // display field/column names as first row
    echo implode("\t", array_keys($row)) . "\r\n";
    $flag = true;
    }
    echo implode("\t", array_values($row)) . "\r\n";
    }
    } else {
    echo "0 results";
    }
    mysqli_close($conn);

}
if($data == 'status'){
$status = $_GET['status'];
$filename = "$status-$currentDate.xls"; // File Name
// Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");
if($status == ''){
    $sql = "SELECT lastName, firstName, middleName, address, phoneNumber, status, lastSchoolAttended FROM user WHERE userLevel = 3 AND year = '$year'";
}else{
    $sql = "SELECT lastName, firstName, middleName, address, phoneNumber, status, lastSchoolAttended FROM user WHERE userLevel = 3 AND status='$status' AND year = '$year'";
}
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    $flag = false;
    while ($row = mysqli_fetch_assoc($result)) {
    if (!$flag) {
    // display field/column names as first row
    echo implode("\t", array_keys($row)) . "\r\n";
    $flag = true;
    }
    echo implode("\t", array_values($row)) . "\r\n";
    }
    } else {
    echo "0 results";
    }
    mysqli_close($conn);

}
if($data == 'municipality'){
$municipality = $_GET['municipality'];
$filename = "$municipality-$currentDate.xls"; // File Name
// Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");
if($municipality == ''){
    $sql = "SELECT lastName, firstName, middleName, address, lastSchoolAttended, municipality FROM user WHERE userLevel = 3 AND year = '$year'";
}else{
    $sql = "SELECT lastName, firstName, middleName, address, lastSchoolAttended, municipality FROM user WHERE userLevel = 3 AND municipality='$municipality' AND year = '$year'";
}
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    $flag = false;
    while ($row = mysqli_fetch_assoc($result)) {
    if (!$flag) {
    // display field/column names as first row
    echo implode("\t", array_keys($row)) . "\r\n";
    $flag = true;
    }
    echo implode("\t", array_values($row)) . "\r\n";
    }
    } else {
    echo "0 results";
    }
    mysqli_close($conn);

}
if($data == 'student'){
$filename = "$data-$currentDate.xls"; // File Name
// Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");
    $sql = "SELECT lastName, firstName, middleName, address, phoneNumber, lastSchoolAttended, municipality, status, course FROM user WHERE userLevel = 3 AND year = '$year'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    $flag = false;
    while ($row = mysqli_fetch_assoc($result)) {
    if (!$flag) {
    // display field/column names as first row
    echo implode("\t", array_keys($row)) . "\r\n";
    $flag = true;
    }
    echo implode("\t", array_values($row)) . "\r\n";
    }
    } else {
    echo "0 results";
    }
    mysqli_close($conn);

}
