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
include_once './includes/chartYearly.php';
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
                            <?php
                            if (isset($_SESSION['message'])) {
                            ?>
                                <div id="alert-timer" class="alert alert-info text-center">
                                    <?php echo $_SESSION['message']; ?>
                                </div>
                            <?php
                                unset($_SESSION['message']);
                            }
                            ?>

                            <?php
                            if (isset($_SESSION['error_message'])) {
                            ?>
                                <div id="alert-timer" class="alert alert-danger text-center">
                                    <?php echo $_SESSION['error_message']; ?>
                                </div>
                            <?php
                                unset($_SESSION['error_message']);
                            }
                            ?>
     <div class="container-fluid">
  <!-- Dash Board Row -->
                         

          
                    <div class="row" style="">
                        <div class="card" style="width: 98%; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); margin-bottom: 10px;">
                            <div class="card-body" >
                                <div class="custom-tab">
                                 <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab" href="#custom-nav-home" role="tab" aria-controls="custom-nav-home" aria-selected="true">Message Student</a>

                                        <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab" href="#custom-nav-profile" role="tab" aria-controls="custom-nav-profile" aria-selected="false">Update Status</a>

                                        <a class="nav-item nav-link" id="custom-nav-template-tab" data-toggle="tab" href="#custom-nav-template" role="tab" aria-controls="custom-nav-template" aria-selected="false">Template</a>
                                        <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#custom-nav-contact" role="tab" aria-controls="custom-nav-contact" aria-selected="false">Help</a>
                                
                                    </div>
                                </nav>

                            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                                    
                                        <div class="" style="float: right;width: 28%; height: 50px; ">
                                        </div>
                                    <iframe src="https://pulsesms.app/" style="border-radius: 5px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);" height="585px" width="70%"  frameborder="0" class="mt-2"></iframe>
                                
                                    <div class="card" style="width: 28%;height: 370px; padding: 0px 0px 15px -15px; float: right; margin-top: -600px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); background-color: #f3f3f3;">
                                            <div class="container" style="margin-top: 20px;">
                                                <h5 style="margin-bottom: -5px;">Send By Category:</h5>
                                                                                             <hr>
									<form action="./includes/questionInfo.php" method="POST">
										<div class="container-fluid" id="patientTable">
												<div class="row">
														<div class="col-lg-12">
														<label for="listofSchool">School</label>
															<?php
																include('schList.php')
															?>
														</div>
														<div class="col-lg-12">
														<label for="listOfMunicipality">Municipality</label>
															<?php
																include('muniList.php')
															?>
														</div>
														<div class="col-lg-12">
														<label for="listOfMunicipality">Course</label>

															<?php
																include('crsList.php')
															?>
														</div>
												</div>
											</div>                            <!-- End Dash Board Row -->
							</br>
												<div class="modal-footer">
													<small style="margin-right:120px">*Select only one category.</small>
													<button type="submit" name="btnTextBy" class="btn btn-primary">Go</button>
												</div>
											</form>

                                                
                                            </div>
											<div class="row mt-3">
											 <div class="col-lg-10 p-2">
												 <div class="text-center">
													 <form method="GET" action="phoneNumbers.php">
														<select onchange="templateClick()" name="selectedTemplate" value="" class="form-control" id="selectedTemplate">
														<option value="">Select Template</option>
														<option value=""></option>
														<option value="Template1">Template 1</option>
														<option value="Template2">Template 2</option>
														<option value="Template3">Template 3</option>
														</select>
														<input type="hidden" name="school" value="<?php echo $_GET['school'] ?>">
														<input type="hidden" name="municipality" value="<?php echo $_GET['municipality'] ?>">
														<input type="hidden" name="course" value="<?php echo $_GET['course'] ?>">
														<input type="hidden" name="id" value="1">
												 </div>
											 </div>
											 <div class="col-lg-2 p-2">
												 <button class="btn btn-success " name="templateBtn"
													 type="submit">Copy</button>
											 </div>
													 </form>
											</div>
                                                
                                           </div>
                                                
                                        
                                        <div class="card" style="float: right; top: -150px; width: 28%; height: 150px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); background-color: #f3f3f3;">

                                            
                                        <?php
                                            include('listOfContactNumbers.php');
                                        ?>
                                        </div>

                                </div>
                            
                               <div class="tab-pane fade" id="custom-nav-contact" role="tabpanel" aria-labelledby="custom-nav-contact-tab">
                                        <?php
                                            include('instruction.php');
                                        ?>
                                </div>
                                <div class="tab-pane fade" id="custom-nav-template" role="tabpanel" aria-labelledby="custom-nav-template-tab">
<form action="./includes/registerUser.php" method="POST">
<h4>Template 1</h4>
<textarea class="form-control" name="etemplate1" cols="30" rows="5">
<?php
$sql = "SELECT * FROM template where id=1";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $content = $row['content'];
    }
}
echo $content;
?>
</textarea>
<h4>Template 2</h4>
<textarea class="form-control"name="etemplate2" cols="30" rows="5">
<?php
$sql = "SELECT * FROM template where id=2";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $content = $row['content'];
    }
}
echo $content;
?>
</textarea>
<h4>Template 3</h4>
<textarea class="form-control"name="etemplate3" cols="30" rows="5">
<?php
$sql = "SELECT * FROM template where id=3";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $content = $row['content'];
    }
}
echo $content;
?>
</textarea>

<button type="submit" name="btnUpdateTemplate" class="btn btn-primary mt-2">Update Template</button>
</form>
                        	   </div>
                                <div class="tab-pane fade" id="custom-nav-profile" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                                        <?php
                                            include('updatestat.php');
                                        ?>
                        	   </div>
                     </div> 
                </div>                            <!-- End Dash Board Row -->


                    </div>
                    <!-- /.container-fluid -->
<?php
include('templates.php');
?>

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

			 $(document).ready(function() {
			 $('#example').DataTable();
			 });

function templateClick(){
  var selectedTemplate = document.getElementById("selectedTemplate");
  if(selectedTemplate.value === "Template1"){
    template1();
  }else if(selectedTemplate.value === "Template2"){
    template2();
  }else if(selectedTemplate.value === "Template3"){
    template3();
  }
}

function template1() {
  /* Get the text field */
  var copyText = document.getElementById("template1");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  //alert("Copied the text: " + copyText.value);
}
function template2() {
  /* Get the text field */
  var copyText = document.getElementById("template2");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  //alert("Copied the text: " + copyText.value);
}
function template3() {
  /* Get the text field */
  var copyText = document.getElementById("template3");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  //alert("Copied the text: " + copyText.value);
}

function copyPhoneNumbers() {
  /* Get the text field */
  var copyText = document.getElementById("listOfPhoneNumbers");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}
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
