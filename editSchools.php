<?php
//start session
session_start();

//database connection
include_once './includes/connection.php';
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
            <link href="css/style.css" rel="stylesheet">

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

                            <!-- Message -->
                            <div class="text-center">
                                <?php
                                if (isset($_SESSION['message'])) {
                                ?>
                                    <div class="alert alert-info text-center" id="alert-timer">
                                        <?php echo $_SESSION['message']; ?>
                                    </div>
                                <?php
                                    unset($_SESSION['message']);
                                }

                                ?>
                            </div>
<div class="container">
<form action="./includes/registerUser.php" method="POST">
	<div class="row">
			<div class="col-lg-4">
				<div class="form-group">
					<label for="school">School</label>
					<input required type="text" class="form-control form-control-user" id="school"
						name="school" placeholder="School">
				</div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					<label for="dropDownCourse">Municipality</label>
						<?php
						$sql = "SELECT * FROM list_municipality";
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0) {
							echo '
								<select required name="selectMunicipality" class="form-control" id="dropDownCourse">
								<option></option>
								';
							while ($row = mysqli_fetch_assoc($result)) {
								$name = $row['name'];
								echo '
									<option value="'.$name.'">'.$name.'</option>
									';
							}
							echo '
								</select>
								';
						}
						?>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					<label for="btnAdd"></label>
                    <button type="submit" id="btnAdd" name="btnAddSchool" class="btn btn-primary mt-4">Add</button>
				</div>
			</div>
	</div>
</form>
	<div class="row">
                        <div class="col-md-12 border border-info">
                            <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>School</th>
                                        <th>Municipality</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                $sql = "SELECT * FROM municipality";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $id = $row['id'];
                                            $municipality = $row['name'];
                                            $school = $row['school'];

                                            echo '
                                                <tr>
                                                    <td>' . $school . '</td>
                                                    <td>' . $municipality . '</td>
                                                    <td><a type="button" class="btn btn-primary" href="modifySchools.php?id=1&school_id='.$id.'&municipality='.$municipality.'&school='.$school.'">Modify</a></td>
                                                </tr>
                                                ';
                                        }
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>School</th>
                                        <th>Municipality</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
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
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>

			<script src="js/jquery.dataTables.min.js"></script>
			<script src="js/dataTables.bootstrap4.min.js"></script>

            <script language="JavaScript" type="text/javascript">
                function confirmDelete() {
                    return confirm('Are you sure you want to delete this data?');
                }
                                    setTimeout(function(){
                                        $('#alert-timer').fadeOut('slow');
                                    },3000);
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
?>
