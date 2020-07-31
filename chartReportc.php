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

<script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Course');
        data.addRows([
<?php 
$year = date("Y");

//$query = "SELECT * FROM municipality";

$query = "SELECT MIN(id) as id, SUM(`count`) as COUNT, course from user WHERE userLevel=3 GROUP BY course";
$result = mysqli_query($conn, $query);

$num_row = mysqli_num_rows($result);
if ($num_row > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $count = $row['COUNT'];
        $course = $row['course'];

            echo "['".$course."',".$count."],";


    }
}

?>


        ]);
        // Set chart options
        var pie_options = {'title':'Course Data',
                       'width':1100,
                       'height':800};

        // Instantiate and draw our chart, passing in some options.
        var piechart = new google.visualization.PieChart(document.getElementById('pie_div'));
        piechart.draw(data, pie_options);

        // Set chart options
        var bar_options = {'title':'Course Data',
                       'width':1100,
                       'height':800};

        // Instantiate and draw our chart, passing in some options.
        var barchart = new google.visualization.BarChart(document.getElementById('bar_div'));
        barchart.draw(data, bar_options);

      }
</script>

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
                        <div class="container">
        <div class="row no-printme">
            <div class="col-lg-3">
                <label for="cars">Chart Type: </label>
                <select name="chartsOption" class="form-control" id="chartsOption" onchange="changeCharts()">
                  <option value=""></option>
                  <option value="bar">Bar Chart</option>
                  <option value="pie">Pie Chart</option>
<?php
$chart_type = $_GET['chart_type'];
$id = $_GET['id'];
$municipality = $_GET['municipality'];
?>
                </select>
                <input id="select_chart_type" type="hidden" value="<?php echo $chart_type ?>" >
                <input id="select_id" type="hidden" value="<?php echo $id ?>" >
                <input id="select_municipality" type="hidden" value="<?php echo $municipality ?>" >
            </div>
<div class="col-lg-2 ml-auto mt-3">
<button class="btn btn-primary" onclick="window.print()">Print</button>
<a class="btn btn-info" href="includes/exportData.php?data=course&course=<?php echo $_GET['course'] ?>">Export</a>
</div>
        </div>

<script>

function changeCharts(){
    var x = document.getElementById("chartsOption").value;
    var y = document.getElementById("select_chart_type").value;
    var z = document.getElementById("select_id").value;
    var a = document.getElementById("select_municipality").value;
    window.location.replace('http://localhost/ccdi-career-guidance-system/chartReportc.php?id=1&chart_type='+ x + '&municipality=' + a);
}
</script>

                            <?php
                            if (isset($_SESSION['registerStudent'])) {
                            ?>
                                <div class="alert alert-info text-center">
                                    <?php echo $_SESSION['registerStudent']; ?>
                                </div>
                            <?php
                                unset($_SESSION['registerStudent']);
                            }

if($_GET['chart_type']=='bar'){
echo '
<div id="bar_div"></div>
<div style="display:none" id="pie_div"></div>
';
}
else if($_GET['chart_type']=='pie'){
echo '
<div style="display:none" id="bar_div"></div>
<div id="pie_div"></div>
';
}


                            ?>
</div>

            <div class="no-printme container-fluid" id="patientTable">
                    <div class="row mb-2">
                        <div class="col-lg-3">
                            <label for="listOfSchool">Course</label>
                            <?php
                            $chart_type= $_GET['chart_type'];
                            $id= $_GET['id'];
                            
                            if (isset($_GET['course'])) {
                                $course = $_GET['course'];
                            }
                            $sql = "SELECT * FROM course";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                            echo '
                            <form action="" method="GET">
                            <select onchange="this.form.submit()" name="course" value="" class="form-control" id="dropDownSchool">
                            <option value="">SELECT COURSE</option>
                            <option value=""></option>
                            ';
                            while ($row = mysqli_fetch_assoc($result)) {
                            $course = $row['name'];
                            echo '
                            <option value="'.$course.'">'.$course.'</option>
                            ';

                            }
                            echo '
                            </select>
<input type="hidden" value="'.$chart_type.'" name="chart_type">
<input type="hidden" value="'.$id.'" name="id">
                            </form>
                            ';
                            }
                            ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 border border-info">
                            <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Phone Number</th>
                                        <th>School</th>
                                        <th>Course</th>
                                        <th>Month</th>
                                        <th>Year</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                            if(isset($_GET['course'])){
                                $course = $_GET['course'];
                                $sql = "SELECT * FROM user where userLevel=3 AND course='$course' ORDER BY id desc";
                            } else {
                                $sql = "SELECT * FROM user where userLevel=3 ORDER BY id desc";
                            }
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
                                                    $address = $row2['address'];
                                                    $yearGraduated = $row2['yearGraduated'];
                                                }
                                            }

                                            echo '
                                                <tr>
                                                    <td>' . $lastName . ', ' . $firstName . ' ' . $middleName . '</td>
                                                    <td>' . $address . '</td>
                                                    <td>' . $phoneNumber . '</td>
                                                    <td>' . $lastSchoolAttended . '</td>
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
                                        <th>Address</th>
                                        <th>Phone Number</th>
                                        <th>School</th>
                                        <th>Course</th>
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
                <footer class="sticky-footer bg-white no-printme">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
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
