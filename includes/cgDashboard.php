<?php
$year = date("Y");

// Total Prospect Student
$sqlProspectStudent = "SELECT * FROM user WHERE userLevel = '3' AND year='$year' ";
$resultProspectStudent = mysqli_query($conn, $sqlProspectStudent);

if (mysqli_num_rows($resultProspectStudent) > 0) {
    $totalProspectStudent = mysqli_num_rows($resultProspectStudent);
} else {
    $totalProspectStudent = 0;
}

// Total Enrolled
$sqlEnrolled = "SELECT * FROM user WHERE userLevel = '3' && status = 'Enrolled' AND year='$year' ";
$resultEnrolled = mysqli_query($conn, $sqlEnrolled);

if (mysqli_num_rows($resultEnrolled) > 0) {
    $totalStudent = mysqli_num_rows($resultEnrolled);
} else {
    $totalStudent = 0;
}

// Total No Response 
$sqlTakedExam = "SELECT * FROM user WHERE userLevel = '3' && status = 'No Response' AND year='$year'";
$resultTakedExam = mysqli_query($conn, $sqlTakedExam);

if (mysqli_num_rows($resultTakedExam) > 0) {
    $totalNoResponse = mysqli_num_rows($resultTakedExam);
} else {
    $totalNoResponse = 0;
}
// Total Not Interested 
$sqlTakedExam = "SELECT * FROM user WHERE userLevel = '3' && status = 'Not Interested' AND year='$year'";
$resultTakedExam = mysqli_query($conn, $sqlTakedExam);

if (mysqli_num_rows($resultTakedExam) > 0) {
    $totalNotInterested = mysqli_num_rows($resultTakedExam);
} else {
    $totalNotInterested = 0;
}
// Total Interested 
$sqlTakedExam = "SELECT * FROM user WHERE userLevel = '3' && status = 'Interested' AND year='$year'";
$resultTakedExam = mysqli_query($conn, $sqlTakedExam);

if (mysqli_num_rows($resultTakedExam) > 0) {
    $totalInterested = mysqli_num_rows($resultTakedExam);
} else {
    $totalInterested = 0;
}
// Total Undecided
$sqlUndecided = "SELECT * FROM user WHERE userLevel = '3' && status = 'Undecided' AND year='$year'";
$resultUndecided = mysqli_query($conn, $sqlUndecided);

if (mysqli_num_rows($resultUndecided) > 0) {
    $totalUndecided = mysqli_num_rows($resultUndecided);
} else {
    $totalUndecided = 0;
}
// Total Expired Student
$sqlExpired = "SELECT * FROM user WHERE userLevel = '3' && status = 'Expired' AND year='$year'";
$resultExpired = mysqli_query($conn, $sqlExpired);

if (mysqli_num_rows($resultExpired) > 0) {
    $totalExpired = mysqli_num_rows($resultExpired);
} else {
    $totalExpired = 0;
}


// 2nd Row
// Total IT
$sqlIT = "SELECT * FROM user WHERE userLevel = '3' && status = 'Enrolled' AND course ='Information Technology'AND year='$year'";
$resultIT = mysqli_query($conn, $sqlIT);

if (mysqli_num_rows($resultIT) > 0) {
    $totalIT = mysqli_num_rows($resultIT);
} else {
    $totalIT = 0;
}
// Total CS
$sqlCS = "SELECT * FROM user WHERE userLevel = '3' && status = 'Enrolled' AND course ='Computer Science'AND year='$year'";
$resultCS = mysqli_query($conn, $sqlCS);

if (mysqli_num_rows($resultCS) > 0) {
    $totalCS = mysqli_num_rows($resultCS);
} else {
    $totalCS = 0;
}
// Total ACT
$sqlACT = "SELECT * FROM user WHERE userLevel = '3' && status = 'Enrolled' AND course ='Associate in Computer Technology'AND year='$year'";
$resultACT = mysqli_query($conn, $sqlACT);

if (mysqli_num_rows($resultACT) > 0) {
    $totalACT = mysqli_num_rows($resultACT);
} else {
    $totalACT = 0;
}
// Total IS
$sqlIS = "SELECT * FROM user WHERE userLevel = '3' && status = 'Enrolled' AND course ='BSIS'AND year='$year'";
$resultIS = mysqli_query($conn, $sqlIS);

if (mysqli_num_rows($resultIS) > 0) {
    $totalIS = mysqli_num_rows($resultIS);
} else {
    $totalIS = 0;
}
