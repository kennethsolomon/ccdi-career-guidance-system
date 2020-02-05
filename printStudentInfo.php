<?php
include_once('./includes/connection.php');

$id = $_GET["id"];
$studentId = $_GET['studentId'];
$username = $_GET['username'];

$sql = "SELECT * FROM user WHERE id='$studentId'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $lastName = $row["lastName"];
        $firstName = $row["firstName"];
        $middleName = $row["middleName"];
        $fullName = $lastName . ',' . $firstName . ' ' . $middleName;
        $address = $row["address"];
        $phoneNumber = $row["phoneNumber"];
        $dateOfExamination = $row["dateOfExamination"];
        $suggestedCourse = $row["suggestedCourse"];
        $score = $row["score"];

        $username = $row["username"];
        $password = $row["password"];
        $status = $row["status"];
        $lastSchoolAttended = $row["lastSchoolAttended"];
        $course = $row["course"];
        $accountLock = $row["takeExam"];
    }
} else {
    echo "0 results";
}
mysqli_close($conn);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Print Student</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
    <link href="css/print.css" rel="stylesheet" />
</head>

<body>
    <a href="viewStudentInfo.php?id=<?php echo $id ?>&studentId=<?php echo $studentId ?>&username=<?php echo $username ?>&search=1" class="btn btn-warning btn-icon-split back">
        <span class="icon text-white-50 back">
            <i class="fas fa-exclamation-triangle back"></i>
        </span>
        <span class="text">Back</span>
    </a>

    <div id="printArea" class="container containerDesign border rounded border-secondary">

        <div class="d-flex justify-content-center">
            <h3>Student Result</h3>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <p>Fullname: <span class="resultFont"><?php echo $fullName ?></span></p>
            </div>
            <div class="col-lg-12">
                <p>Address: <?php echo $address ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>Phone Number: <?php echo $phoneNumber ?></p>
            </div>
            <div class="col-lg-12">
                <p>Exam Score: <?php echo $score ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>Suggested Course: <?php echo $suggestedCourse ?></p>
            </div>
            <div class="col-lg-12">
                <p>Date Of Examination: <?php echo $dateOfExamination ?></p>
            </div>
        </div>

        <p class="signature">Authorized Personnel: _______________</p>
        <p class="signature">Student Signature: __________________</p>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>