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
                                <div class="alert alert-info text-center">
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
                                <!-- Taked Exam  -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total
                                                        Taked Exam Student</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                        <?php echo $totalTakedExam ?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-book-open fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Total Undecided  -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total
                                                        Undecided Student</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                        <?php echo $totalUndecided ?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-question-circle fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Total Expired  -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-danger shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total
                                                        Expired Student</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                        <?php echo $totalExpired ?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-exclamation-triangle fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Dash Board Row -->

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
                            <!-- Dash Board Row -->

                            <!-- Need to Fix the Codes -->
                            <div class="container" style="margin-top: 200px">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-body">
                                                <ul class="chat">
                                                    <?php

                                                    if (isset($_POST['btnSendChat'])) {
                                                        $chatMessage = $_POST['chatMessage'];
                                                        $id = $_POST['id'];
                                                        $sql = "INSERT INTO chatMessage (
                              chatMessage, 
                              fromUserId
                              ) VALUES (
                              '$chatMessage',
                              '$id'
                              )";
                                                        if (mysqli_query($conn, $sql)) {
                                                        } else {
                                                            echo "Error: " . $sql . "" . mysqli_error($conn);
                                                        }
                                                    }

                                                    //Get All Chat and User ID
                                                    $getAllMessage = "SELECT * FROM chatMessage ORDER by id DESC LIMIT 10";
                                                    $resultAllMessage = mysqli_query($conn, $getAllMessage);

                                                    if (mysqli_num_rows($resultAllMessage) > 0) {
                                                        while ($rowAllMessage = mysqli_fetch_assoc($resultAllMessage)) {

                                                            $allChatId =  $rowAllMessage["fromUserId"];
                                                            $allChat =  $rowAllMessage["chatMessage"];
                                                            $timestamp =  $rowAllMessage["timestamp"];

                                                            //Get Chat Name
                                                            $getChatName = "SELECT * FROM user Where id = '$allChatId'";
                                                            $resultChatName = mysqli_query($conn, $getChatName);

                                                            if (mysqli_num_rows($resultChatName) > 0) {
                                                                while ($rowChatName = mysqli_fetch_assoc($resultChatName)) {
                                                                    $chatName =  $rowChatName["firstName"];

                                                                    echo '
                                  <li class="right clearfix"><span class="chat-img pull-right">
                                    <img src="css/image/chatAvatar.png" width=50px; height=50px; alt="User Avatar" class="img-circle" />
                                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>' . $timestamp . '</small>
                                    </span>
                                  <div class="chat-body clearfix">
                                    <div class="header">
                                      <small class=" text-muted"><span class="glyphicon glyphicon-time"></span></small>
                                      <strong class="pull-right primary-font">' . $chatName . '</strong>
                                    </div>
                                    <p>
                                      ' . $allChat . ' 
                                    </p>
                                  </div>
                                </li>
                                ';
                                                                }
                                                            }
                                                            // Ends Here

                                                        }
                                                    }
                                                    // Ends Here
                                                    ?>
                                                </ul>
                                            </div>
                                            <div class="panel-footer">
                                                <form action="home.php?id=<?php echo $_GET['id'] ?>" method="post">
                                                    <div class="input-group">
                                                        <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." name="chatMessage" />
                                                        <span class="input-group-btn">
                                                            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                                                            <button class="btn btn-warning btn-md" id="btn-chat" name="btnSendChat">Send</button>
                                                </form>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Need to Fix the Codes -->

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