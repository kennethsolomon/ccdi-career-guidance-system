<?php
session_start();

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

    $url = "./../viewStudentInfo.php?id=$id&studentId=$studentId&username=$username&search=1";
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
    if ($conn->query($sql) === TRUE) {
        $_SESSION['updateMessage'] = 'Student Update Successfully!';
        header("location: ./../viewStudentInfo.php?id=$id&studentId=$studentId&username=$username&search=$search");
        // header("location: ./../home.php?id=$id");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

if (isset($_POST['btnStudentInfoPrint'])) {
    $id = $_POST["id"];
    $studentId = $_POST['studentId'];
    $username = $_POST['username'];
    header("location: ./../printStudentInfo.php?id=$id&studentId=$studentId&username=$username");
}
