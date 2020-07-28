<?php
//start session
session_start();

//database connection
include_once './includes/connection.php';
include_once './includes/cgDashboard.php';

?>

<?php
if ($_SESSION['userLevel'] == 0) {
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
            <link href="css/chat.css" rel="stylesheet">

            <link href="css/style.css" rel="stylesheet">


<script type="text/javascript" src="js/loader.js"></script>

<?php
include_once './includes/chartStudent.php';
include_once './includes/chartMunicipality.php';
?>

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
                                        <img class="img-profile rounded-circle" src="css/image/ccdiLogo.png">
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                        <!-- <a class="dropdown-item" href="#">
                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                      Profile
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                      Settings
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                      Activity Log
                    </a>
                    <div class="dropdown-divider"></div> -->
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
                            if (isset($_SESSION['registerStudent'])) {
                            ?>
                                <div id="alert-timer" class="alert alert-info text-center">
                                    <?php echo $_SESSION['registerStudent']; ?>
                                </div>
                            <?php
                                unset($_SESSION['registerStudent']);
                            }
                            ?>

                            <!-- Page Heading -->
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                            </div>


                            <!-- Dash Board Row -->
                            <div class="row">

                                <!-- IT  -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total
                                                        IT Enrolled</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalIT ?>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- CS  -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total
                                                        CS Enrolled</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalCS ?>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- IS  -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total
                                                        IS Enrolled</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalIS ?>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ACT  -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total
                                                        ACT Enrolled</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalACT ?>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- End Dash Board Row -->

                            <!-- Dash Board Row -->
                            <div class="row">

                                <!-- Total Enrolled  -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total
                                                        Enrolled Student</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                        <?php echo $totalStudent ?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-school fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Interested  -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Student Interested</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                        <?php echo $totalInterested ?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-book-open fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Not Interested  -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Student Not Interested</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                        <?php echo $totalNotInterested ?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-book-open fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- No Response  -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-danger shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">No Response</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                        <?php echo $totalNoResponse ?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-book-open fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>




<div class="row">
    <div class="col-lg-6">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Number of Prospect Student (Monthly)</h1>
            </div>
        <div id="bar_div"></div>
    </div>

    <div class="col-lg-6">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Prospect Student Per Municipality</h1>
            </div>
        <div id="pie_div"></div>
    </div>
</div>

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Student Info Table</h1>
            </div>
            <div class="container-fluid" id="patientTable">
                    <div class="row">
                        <div class="col-md-12 border border-info">
                            <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>School</th>
                                        <th>Status</th>
                                        <th>Municipality</th>
                                        <th>Course Intended</th>
                                        <th>Month</th>
                                        <th>Year</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $sql = "SELECT * FROM user where userLevel=3 ORDER BY id desc";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $id = $row['id'];
                                            $municipality = $row['municipality'];
                                            $phoneNumber = $row['phoneNumber'];
                                            $status = $row['status'];
                                            $course = $row['course'];
                                            $lastSchoolAttended = $row['lastSchoolAttended'];

                                            $sql2 = "SELECT * FROM user where id = '$id'";
                                            $result2 = mysqli_query($conn, $sql2);

                                            if (mysqli_num_rows($result2) > 0) {
                                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                                    $lastName = $row2['lastName'];
                                                    $firstName = $row2['firstName'];
                                                    $middleName = $row2['middleName'];
                                                    $month = $row2['month'];
                                                    $year = $row2['year'];
                                                }
                                            }

                                            echo '
                                                <tr>
                                                    <td>' . $lastName . ', ' . $firstName . ' ' . $middleName . '</td>
                                                    <td>' . $phoneNumber . '</td>
                                                    <td>' . $lastSchoolAttended . '</td>
                                                    <td>' . $status . '</td>
                                                    <td>' . $municipality . '</td>
                                                    <td>' . $course . '</td>
                                                    <td>' . $month . '</td>
                                                    <td>' . $year . '</td>
                                                    <td><a type="button" class="btn btn-primary" href="viewStudentInfo.php?id=1&studentId='.$id.'&lastname='.$lastName.'&search=1">Modify</a></td>
                                                </tr>
                                                ';
                                        }
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>School</th>
                                        <th>Status</th>
                                        <th>Municipality</th>
                                        <th>Course Intended</th>
                                        <th>Month</th>
                                        <th>Year</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>                            <!-- End Dash Board Row -->

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
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>

			<script src="js/jquery.dataTables.min.js"></script>
			<script src="js/dataTables.bootstrap4.min.js"></script>

			<script type="text/javascript">

                                    setTimeout(function(){
                                        $('#alert-timer').fadeOut('slow');
                                    },3000);

				$(document).ready(function() {
					// Javascript method's body can be found in assets/js/demos.js
					demo.initDashboardPageCharts();

					// demo.showNotification("Goodshit!");
				});

				// $(document).ready(function() {
				//     $('#example').DataTable();
				// });
				$(document).ready(function() {
					// Setup - add a text input to each footer cell
					$('#example tfoot th').each(function() {
						var title = $(this).text();
						$(this).html('<input type="text" placeholder="' + title + '" />');
					});

					// DataTable
                    var table = $('#example').DataTable();

					// Apply the search
					table.columns().every(function() {
						var that = this;

						$('input', this.footer()).on('keyup change clear', function() {
							if (that.search() !== this.value) {
								that
									.search(this.value)
									.draw();
							}
						});
					});
				});
			</script>
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
mysqli_close($conn);
?>
