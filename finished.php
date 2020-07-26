<?php
session_start();

include_once './includes/connection.php';

$id = $_GET['id'];
$examId = $_GET['examId'];
?>

<?php
if ($_SESSION['userLevel'] == 3) {
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
                <div id="content" style="margin-top: 15vh">
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <!-- Container -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12" align="center">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">You finish the Exam!</h6>
                                        </div>
                                        <div class="card-body">
                                            <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque semper
                                                arcu tellus, vitae congue enim commodo in.
                                                Etiam ipsum neque, maximus at orci a, porta pulvinar nunc. Nunc vel est sed
                                                turpis iaculis pulvinar quis quis mauris.
                                                Maecenas et pulvinar risus. Pellentesque semper facilisis libero et finibus.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Vivamus eu eros quis risus porta viverra. Sed vitae finibus eros. Nulla nec sem
                                                vitae purus pretium sodales.
                                                Nunc tempus, magna sit amet sodales cursus, ipsum nulla iaculis turpis, non
                                                ullamcorper ex ipsum ac arcu.
                                                Curabitur semper urna sed eros aliquam egestas non rhoncus ex.
                                            </h5>
                                            <hr>
                                            <a href='./includes/examResult.php?id=<?php echo $id ?>&examId=<?php echo $examId ?>' class="btn btn-danger btn-icon-split btn-lg">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-info-circle"></i>
                                                </span>
                                                <span class="text">Logout!</span>
                                            </a>
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
        $url = "./index.php";
        $url = str_replace(PHP_EOL, '', $url);
        header("Location: $url");
    }
} else {
    $url = "./index.php";
    $url = str_replace(PHP_EOL, '', $url);
    header("Location: $url");
}
?>