<?php
// Total Enrolled
$sqlEnrolled = "SELECT * FROM user WHERE userLevel = '3' && status = 'Enrolled'";
$resultEnrolled = mysqli_query($conn, $sqlEnrolled);

if (mysqli_num_rows($resultEnrolled) > 0) {
    $totalStudent = mysqli_num_rows($resultEnrolled);
} else {
    $totalStudent = 0;
}

// Total Taked Exam
$sqlTakedExam = "SELECT * FROM user WHERE userLevel = '3' && status = 'Taked Exam'";
$resultTakedExam = mysqli_query($conn, $sqlTakedExam);

if (mysqli_num_rows($resultTakedExam) > 0) {
    $totalTakedExam = mysqli_num_rows($resultTakedExam);
} else {
    $totalTakedExam = 0;
}
// Total Undecided
$sqlUndecided = "SELECT * FROM user WHERE userLevel = '3' && status = 'Undecided'";
$resultUndecided = mysqli_query($conn, $sqlUndecided);

if (mysqli_num_rows($resultUndecided) > 0) {
    $totalUndecided = mysqli_num_rows($resultUndecided);
} else {
    $totalUndecided = 0;
}
// Total Expired Student
$sqlExpired = "SELECT * FROM user WHERE userLevel = '3' && status = 'Expired'";
$resultExpired = mysqli_query($conn, $sqlExpired);

if (mysqli_num_rows($resultExpired) > 0) {
    $totalExpired = mysqli_num_rows($resultExpired);
} else {
    $totalExpired = 0;
}


// 2nd Row
// Total IT
$sqlIT = "SELECT * FROM user WHERE userLevel = '3' && status = 'Enrolled' AND course ='Information Technology'";
$resultIT = mysqli_query($conn, $sqlIT);

if (mysqli_num_rows($resultIT) > 0) {
    $totalIT = mysqli_num_rows($resultIT);
} else {
    $totalIT = 0;
}
// Total CS
$sqlCS = "SELECT * FROM user WHERE userLevel = '3' && status = 'Enrolled' AND course ='Computer Science'";
$resultCS = mysqli_query($conn, $sqlCS);

if (mysqli_num_rows($resultCS) > 0) {
    $totalCS = mysqli_num_rows($resultCS);
} else {
    $totalCS = 0;
}
// Total ACT
$sqlACT = "SELECT * FROM user WHERE userLevel = '3' && status = 'Enrolled' AND course ='ACT'";
$resultACT = mysqli_query($conn, $sqlACT);

if (mysqli_num_rows($resultACT) > 0) {
    $totalACT = mysqli_num_rows($resultACT);
} else {
    $totalACT = 0;
}
// Total IS
$sqlIS = "SELECT * FROM user WHERE userLevel = '3' && status = 'Enrolled' AND course ='BSIS'";
$resultIS = mysqli_query($conn, $sqlIS);

if (mysqli_num_rows($resultIS) > 0) {
    $totalIS = mysqli_num_rows($resultIS);
} else {
    $totalIS = 0;
}
