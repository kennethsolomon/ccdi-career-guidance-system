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


if (isset($_POST['btnRegister'])) {
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

    $sql = "SELECT * FROM municipality WHERE school='$lastSchoolAttended'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $school = $row['school'];
            $municipality = $row['name'];

        }
    }

    $sql = "SELECT * FROM user WHERE phoneNumber='$phoneNumber'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['registerStudent'] = 'Phone No. Already Exist!';
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


if (isset($_POST['btnAddSchool'])) {
$name = $_POST['selectMunicipality'];
$school = $_POST['school'];
        $sql = "INSERT INTO municipality(
        name,
        school
        ) VALUES (
        '$name',
        '$school'
        )";

        if (mysqli_query($conn, $sql)) {
            $_SESSION['message'] = 'Add School Successfully!';
            $url = "./../editSchools.php?id=1";
            $url = str_replace(PHP_EOL, '', $url);
            header("Location: $url");
        } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
        $conn->close();
}
if (isset($_POST['btnSchoolUpdate'])) {
$school_id = $_POST['school_id'];
$municipality = $_POST['selectMunicipality'];
$school = $_POST['school'];
    $sql = "UPDATE municipality SET 
        name='$municipality', 
        school='$school' 
        WHERE 
        id='$school_id'";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = 'School Update Successfully!';

        $url = "./../editSchools.php?id=1";
        $url = str_replace(PHP_EOL, '', $url);
        header("Location: $url");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
if (isset($_POST['btnSchoolDelete'])) {
$school_id = $_POST['school_id'];
    $sql = "DELETE FROM municipality WHERE id=$school_id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = 'School Deleted Successfully!';
        $url = "./../editSchools.php?id=1";
        $url = str_replace(PHP_EOL, '', $url);
        header("Location: $url");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}
if (isset($_POST['btnUpdateTemplate'])) {
$template1 = $_POST['etemplate1'];
$template2 = $_POST['etemplate2'];
$template3 = $_POST['etemplate3'];
    $sql = "UPDATE template SET 
        content='$template1' 
        WHERE 
        id='1'";
    if ($conn->query($sql) === TRUE) {
        $sql2 = "UPDATE template SET 
            content='$template2' 
            WHERE 
            id='2'";
        if ($conn->query($sql2) === TRUE) {
            $sql3 = "UPDATE template SET 
                content='$template3' 
                WHERE 
                id='3'";
            if ($conn->query($sql3) === TRUE) {
                $_SESSION['message'] = 'Template Updated Successfully!';
                $url = "./../phoneNumbers.php?id=1&school=&municipality=&course=";
                $url = str_replace(PHP_EOL, '', $url);
                header("Location: $url");
            }
        }
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
