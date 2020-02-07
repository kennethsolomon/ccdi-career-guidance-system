<?php
//start session
session_start();

//database connection
include_once './includes/connection.php';
$query = "SELECT * FROM user WHERE userLevel != 1 AND userLevel != 0 ORDER BY ID DESC";
$result = mysqli_query($conn, $query);
?>
<?php
include_once './includes/cgDashboard.php';
?>
<?php
if ($_SESSION['userLevel'] == 1) {
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

            <!-- Custom styles for this template -->
            <link href="css/sb-admin-2.min.css" rel="stylesheet">

            <!-- Custom styles for this page -->
            <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

        </head>

        <body id="page-top">

            <!-- Page Wrapper -->
            <div id="wrapper">

                <!-- Sidebar -->
                <?php include_once('./sidebar.php') ?>

                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">

                    <!-- Main Content -->
                    <div id="content">

                        <!-- Topbar -->
                        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                            <!-- Topbar Navbar -->
                            <ul class="navbar-nav ml-auto">

                                <div class="topbar-divider d-none d-sm-block"></div>

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
                            <?php
                            if (isset($_SESSION['message'])) {
                            ?>
                                <div class="alert alert-info text-center">
                                    <?php echo $_SESSION['message']; ?>
                                </div>
                            <?php
                                unset($_SESSION['message']);
                            }
                            ?>
                            <!-- Page Heading -->
                            <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                            <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">All Student Data</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Username</th>
                                                    <th>Lastname</th>
                                                    <th>Firstname</th>
                                                    <th>Middlename</th>
                                                    <th>Address</th>
                                                    <th>Phone Number</th>
                                                    <th>Course</th>
                                                    <th>Last School Attended</th>
                                                    <th>Score</th>
                                                    <th>Suggested Course</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Username</th>
                                                    <th>Lastname</th>
                                                    <th>Firstname</th>
                                                    <th>Middlename</th>
                                                    <th>Address</th>
                                                    <th>Phone Number</th>
                                                    <th>Course</th>
                                                    <th>Last School Attended</th>
                                                    <th>Score</th>
                                                    <th>Suggested Course</th>
                                                    <th>Status</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php
                                                while ($row = mysqli_fetch_array($result)) {
                                                    echo '  
                                                    <tr>  
                                                        <td>' . $row["id"] . '</td>  
                                                        <td>' . $row["username"] . '</td>  
                                                        <td>' . $row["lastName"] . '</td>  
                                                        <td>' . $row["firstName"] . '</td>  
                                                        <td>' . $row["middleName"] . '</td>
                                                        <td>' . $row["address"] . '</td>  
                                                        <td>' . $row["phoneNumber"] . '</td>
                                                        <td>' . $row["course"] . '</td>
                                                        <td>' . $row["lastSchoolAttended"] . '</td>
                                                        <td>' . $row["score"] . '</td>
                                                        <td>' . $row["suggestedCourse"] . '</td>
                                                        <td>' . $row["status"] . '</td>  
                                                    </tr>  
                                                    ';
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.container-fluid -->




















                    </div>
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Your Website 2019</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

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
            <script src="vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/datatables-demo.js"></script>

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

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>