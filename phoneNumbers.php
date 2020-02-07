 <?php
    //Start session
    session_start();
    // Connect to database
    include_once('./includes/connection.php');

    $id = $_POST['id'];
    ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>

     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">

     <title>SB Admin 2 - Forgot Password</title>

     <!-- Custom fonts for this template-->
     <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

     <!-- Custom styles for this template-->
     <link href="css/sb-admin-2.min.css" rel="stylesheet">

 </head>

 <body class="bg-gradient-primary">

     <div class="container">

         <!-- Outer Row -->
         <div class="row justify-content-center">

             <div class="col-xl-10 col-lg-12 col-md-9">

                 <div class="card o-hidden border-0 shadow-lg my-5">
                     <div class="card-body p-0">
                         <!-- Nested Row within Card Body -->
                         <div class="row">
                             <!-- <div class="col-lg-3 d-none d-lg-block ">
                                 
                             </div> -->
                             <div class="col-lg-12">
                                 <div class="p-5">
                                     <div class="text-center">
                                         <h1 class="h4 text-gray-900 mb-2">List of Contact Number:</h1>
                                         <!-- Query to get all the phone numbers -->
                                         <?php
                                            if (isset($_POST['btnPhoneNumber'])) {

                                                // Get Date and Time
                                                date_default_timezone_set("Asia/Manila");
                                                //Test Trigger if Working
                                                // $currentDate = '2020-02-21 00:00:00';
                                                $getCurrentDate = date("Y-m-d");
                                                $currentDate = $getCurrentDate . ' ' . '00:00:00';
                                                $sql = "SELECT * FROM user Where userLevel=3 AND status='Taked Exam' OR status='Undecided' ORDER BY id desc";
                                                $result = mysqli_query($conn, $sql);
                                                if (mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        $exp_date_at = $row["exp_date_at"];
                                                        if ($exp_date_at >= $currentDate) {
                                                            echo $phoneNumbers = $row["phoneNumber"] . ",";
                                                        }
                                                    }
                                                } else {
                                                    echo "0 results";
                                                }
                                                mysqli_close($conn);
                                            }
                                            ?>
                                     </div>
                                     <iframe src="https://pulsesms.app/" width="800px" height="600px" frameborder="0"></iframe>
                                     <hr>
                                     <div class="row">
                                         <div class="col-lg-12 p-2">
                                             <div class="text-center">
                                                 <form method="post">
                                                     <button class="btn btn-success " name="btnPhoneNumber" type="submit">Get All Student Number</button>
                                                 </form>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-lg-12">
                                             <div class="text-center">
                                                 <a href="./home.php?id=<?php echo $_GET['id']; ?>" class="btn btn-info btn-icon-split">
                                                     <span class="icon text-white-50">
                                                         <i class="fas fa-info"></i>
                                                     </span>
                                                     <span class="text">Back to CG Panel</span>
                                                 </a>
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>

         </div>

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