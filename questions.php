<?php
session_start();

include_once './includes/connection.php';

$id = $_GET['id'];
$eNum = $_GET['eNum'];

$sql = "SELECT * FROM examQuestion WHERE id='$eNum'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $examId = $row['id'];
        $question = $row['question'];
        $letterA = $row['letterA'];
        $letterB = $row['letterB'];
        $letterC = $row['letterC'];
        $letterD = $row['letterD'];
        $correctAnswer = $row['correctAnswer'];
    }
} else {
    $sql2 = "UPDATE user SET takeExam=1 WHERE id='$id'";
    if ($conn->query($sql2) === TRUE) {
        header("location: ./finished.php?id=$id");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
mysqli_close($conn);
?>

<?php
if ($_SESSION['userLevel'] == 3 && $_SESSION['takeExam'] == 0) {
    if (isset($_SESSION['loggedin'])) {
?>

        <!DOCTYPE html>
        <html lang="en">

        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="">

            <title>CGS - CCDI</title>

            <!-- Custom fonts for this template-->
            <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

            <!-- Custom styles for this template-->
            <link href="css/sb-admin-2.min.css" rel="stylesheet">

        </head>

        <body id="page-top">

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['firstName']; ?></span>
                                    <img class="img-profile rounded-circle" src="https://www.ccdi-sorsogon.net/wp-content/uploads/2018/04/cropped-ccdilogo.png">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="./includes/logout.php">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <!-- Container -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12" align="center">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Question Number <?php echo $examId ?></h6>
                                        </div>
                                        <div class="card-body">
                                            <?php
                                            $eNum = $_GET['eNum'];
                                            $newENum = $eNum + 1;
                                            echo '
                                                <form action="./checkAnswer.php" method="POST">
                                                <input type="hidden" name="correctAnswer" value="' . $correctAnswer . '">
                                                <input type="hidden" name="id" value="' . $id . '">
                                                <input type="hidden" name="eNum" value="' . $newENum . '">
                                                <div class="row">
                                                <div class="col-lg-12">
                                                ' . $question . '
                                                </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="radio" class="form-check-input" value="' . $letterA . '" name="answer">' . $letterA . '
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="radio" class="form-check-input" value="' . $letterB . '" name="answer">' . $letterB . '
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="radio" class="form-check-input" value="' . $letterC . '" name="answer">' . $letterC . '
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="radio" class="form-check-input" value="' . $letterD . '" name="answer">' . $letterD . '
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <button class="btn btn-success .btn-circle .btn-lg" type="submit" name="saveAnswer">Save Answer</button>
                                                ';
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Container -->

                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>

        </body>

        </html>

<?php
    } else {
        header('location: ./login.php');
    }
} else {
    header('location: ./login.php');
}
?>