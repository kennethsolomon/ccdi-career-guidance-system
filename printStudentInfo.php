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
    <link href="css/print.css" rel="stylesheet" />
</head>

<body>

    <div class="asd" id="cons">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Student Information</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <input type="hidden" class="form-control" id="id" name="id" value="1">
                    <input type="hidden" class="form-control" id="studentId" name="studentId" value="39">
                    <input type="hidden" class="form-control" id="search" name="search" value="1">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input disabled="" type="text" class="form-control" id="username" name="username" value="test" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII=&quot;);">
                            <input type="hidden" class="form-control" id="username" name="username" value="test">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" value="e08a7c49d96c2b475656cc8fe18cee8e" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACIUlEQVQ4EX2TOYhTURSG87IMihDsjGghBhFBmHFDHLWwSqcikk4RRKJgk0KL7C8bMpWpZtIqNkEUl1ZCgs0wOo0SxiLMDApWlgOPrH7/5b2QkYwX7jvn/uc//zl3edZ4PPbNGvF4fC4ajR5VrNvt/mo0Gr1ZPOtfgWw2e9Lv9+chX7cs64CS4Oxg3o9GI7tUKv0Q5o1dAiTfCgQCLwnOkfQOu+oSLyJ2A783HA7vIPLGxX0TgVwud4HKn0nc7Pf7N6vV6oZHkkX8FPG3uMfgXC0Wi2vCg/poUKGGcagQI3k7k8mcp5slcGswGDwpl8tfwGJg3xB6Dvey8vz6oH4C3iXcFYjbwiDeo1KafafkC3NjK7iL5ESFGQEUF7Sg+ifZdDp9GnMF/KGmfBdT2HCwZ7TwtrBPC7rQaav6Iv48rqZwg+F+p8hOMBj0IbxfMdMBrW5pAVGV/ztINByENkU0t5BIJEKRSOQ3Aj+Z57iFs1R5NK3EQS6HQqF1zmQdzpFWq3W42WwOTAf1er1PF2USFlC+qxMvFAr3HcexWX+QX6lUvsKpkTyPSEXJkw6MQ4S38Ljdbi8rmM/nY+CvgNcQqdH6U/xrYK9t244jZv6ByUOSiDdIfgBZ12U6dHEHu9TpdIr8F0OP692CtzaW/a6y3y0Wx5kbFHvGuXzkgf0xhKnPzA4UTyaTB8Ph8AvcHi3fnsrZ7Wore02YViqVOrRXXPhfqP8j6MYlawoAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="examScore">Score:</label>
                            <input disabled="" type="text" class="form-control" id="examScore" name="examScore" value="0">
                            <input type="hidden" class="form-control" id="examScore" name="examScore" value="0">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="suggestedCourse">Suggested Course:</label>
                        <select name="suggestedCourse" id="suggestedCourse" class="browser-default custom-select">
                            <option selected=""></option>
                            <option></option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Information Technology">Information Technology</option>
                            <option value="Accosiciate in Computer Technology">Accosiciate in Computer Technology</option>
                            <option value="BSIS">BSIS</option>
                        </select>
                    </div>
                </div>
                <!-- End of Row -->
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="lastName">Lastname:</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" value="test">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="firstName">Firstname:</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" value="test">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="middleName">Middlename:</label>
                            <input type="text" class="form-control" id="middleName" name="middleName" value="test">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="phoneNumber">Phone Number:</label>
                            <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" value="123">
                        </div>
                    </div>
                </div>
                <!-- End of Row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" id="address" name="address" value="test">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="status">Status:</label>
                        <select id="status" name="status" class="browser-default custom-select">
                            <option selected="">Enrolled</option>
                            <option></option>
                            <option value="Taked Exam">Taked Exam</option>
                            <option value="Enrolled">Enrolled</option>
                            <option value="Undecided">Undecided</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="dateOfExamination">Date of Examination:</label>
                            <input type="text" class="form-control" id="dateOfExamination" name="dateOfExamination" value="">
                        </div>
                    </div>
                </div>
                <!-- End of Row -->
                <div class="row">
                    <div class="col-lg-3">
                        <label for="lastSchoolAttended">Last School Attended:</label>
                        <select value="SNHS" id="selectedLastSchoolAttended" class="browser-default custom-select" name="lastSchoolAttended">
                            <option selected="">SNHS</option>
                            <option></option>
                            <option>SNHS</option>
                            <option>Aemillianum College Inc.</option>
                            <option>TLC</option>
                            <option>SMLCS</option>
                            <option>SSU</option>
                            <option>Annunciation College</option>
                            <option>Others</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label for="course">Course:</label>
                        <select id="course" class="browser-default custom-select" name="course" value="Information Technology">
                            <option selected="">Information Technology</option>
                            <option></option>
                            <option>Information Technology</option>
                            <option>Computer Science</option>
                            <option>ACT</option>
                            <option>IS</option>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <label for="accountLock" class="lockLabel">Account Lock ( 0 - Unlock | 1 - Lock ):</label>
                        <select name="accountLock" value="0" id="accountLock" class="browser-default custom-select">
                            <option selected="">0</option>
                            <option></option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-lg-2">
                    </div>
                </div>
                <!-- End of Row -->
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-3 btnUpdateMargin">
                        <button name="btnStudentInfoUpdate" class="btn btn-success cgStudentUpdate" type="submit">Update</button>
                    </div>
                    <div class="col-lg-3 btnUpdateMargin">
                        <button name="btnStudentInfoPrint" class="btn btn-info cgStudentUpdate" type="submit">Print</button>
                    </div>
                </div>
                <!-- End of Row -->
            </div>
            <!-- End of Card Body -->
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