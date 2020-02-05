<!-- Be careful if the div that you're printing with this code requires any CSS to render they way you want. 
If it does you'll have to make sure you add it to the page as well using WinPrint.document.write(cssLinkTag). – -->

<?php

$id = $_GET["id"];
$studentId = $_GET['studentId'];
$username = $_GET['username'];

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
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>

    <div class="container printMargin">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Basic Card Example</h6>
            </div>
            <div class="card-body" id="root">
                <h1><?php echo  $username ?></h1>
            </div>
        </div>
    </div>

    <button onclick="printMe()">Print!</button>
    <h1>Print me!</h1>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script>
        function printMe() {
            var prtContent = document.getElementById("root");
            var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
            WinPrint.document.write("< link href = '
                css / style.css '
                rel = 'stylesheet' / > ");
                WinPrint.document.write(prtContent.innerHTML);

                WinPrint.document.close(); WinPrint.focus(); WinPrint.print(); WinPrint.close();
            }
    </script>
</body>

</html>