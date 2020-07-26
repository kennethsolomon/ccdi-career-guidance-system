<?php
session_start();

include_once './connection.php';

if (isset($_POST['btnViewStudent'])) {
    $lastName = $_POST['lastName'];
    $id = $_POST['id'];
    $sql = "SELECT * FROM user WHERE lastName='$lastName'";
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

    $url = "./../viewStudentInfo.php?id=$id&studentId=$studentId&lastname=$lastName&search=1";
    $url = str_replace(PHP_EOL, '', $url);
    header("Location: $url");
}

if (isset($_POST['btnStudentInfoUpdate'])) {
    $id = $_POST["id"];
    $studentId = $_POST['studentId'];
    $search = $_POST['search'];
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['address'];
    $status = $_POST['status'];
    $dateOfExamination = $_POST['dateOfExamination'];
    $lastSchoolAttended = $_POST['lastSchoolAttended'];
    $course = $_POST['course'];
    $suggestedCourse = $_POST['suggestedCourse'];
    $score = $_POST['examScore'];
    $accountLock = $_POST['accountLock'];

    if ($password == '') {
        $sql = "UPDATE user SET 
        lastName='$lastName', 
        firstName='$firstName', 
        middleName='$middleName', 
        phoneNumber='$phoneNumber', 
        address='$address',
        status='$status',
        dateOfExamination='$dateOfExamination',
        lastSchoolAttended='$lastSchoolAttended',
        course='$course',
        suggestedCourse='$suggestedCourse',
        score='$score',
        takeExam='$accountLock' 
        WHERE 
        id='$studentId'";
    } else {
        $sql = "UPDATE user SET 
        lastName='$lastName', 
        firstName='$firstName', 
        middleName='$middleName', 
        password=md5('$password'), 
        phoneNumber='$phoneNumber', 
        address='$address',
        status='$status',
        dateOfExamination='$dateOfExamination',
        lastSchoolAttended='$lastSchoolAttended',
        course='$course',
        suggestedCourse='$suggestedCourse',
        score='$score',
        takeExam='$accountLock' 
        WHERE 
        id='$studentId'";
    }

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = 'Student Update Successfully!';
        $url = "./../viewStudentInfo.php?id=$id&studentId=$studentId&lastname=$lastName&search=$search";
        $url = str_replace(PHP_EOL, '', $url);
        header("Location: $url");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

if (isset($_POST['btnStudentInfoPrint'])) {
    $id = $_POST["id"];
    $studentId = $_POST['studentId'];
    $username = $_POST['username'];
    $lastName = $_POST['lastName'];
    $url = "./../printStudentInfo.php?id=$id&studentId=$studentId&lastname=$lastName";
    $url = str_replace(PHP_EOL, '', $url);
    header("Location: $url");
}

if (isset($_POST['btnStudentInfoDelete'])) {
    $id = $_POST["id"];
    $studentId = $_POST['studentId'];
    $search = $_POST['search'];
    $username = $_POST['username'];
    $lastName = $_POST['lastName'];

    $sql = "DELETE FROM user WHERE id=$studentId";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = 'Student Deleted Successfully!';
        $url = "./../viewStudentInfo.php?id=$id&studentId=&lastname=$lastName&search=$search";
        $url = str_replace(PHP_EOL, '', $url);
        header("Location: $url");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}
