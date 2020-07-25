<?php
include_once './includes/connection.php';
$id = $_GET['id'];
//$username = $_GET['username'];
$studentID = $_GET['studentId'];

if ($_GET['search'] == 1 && $studentID != '') {
    $gStudentInfo = "SELECT * FROM user WHERE id='$studentID'";
    $rStudentInfo = mysqli_query($conn, $gStudentInfo);

    if (mysqli_num_rows($rStudentInfo) > 0) {
        while ($rowStudentInfo = mysqli_fetch_assoc($rStudentInfo)) {
            $id = $_GET["id"];
            $search = $_GET["search"];
            $studentId = $rowStudentInfo["id"];
            $lastName = $rowStudentInfo["lastName"];
            $firstName = $rowStudentInfo["firstName"];
            $middleName = $rowStudentInfo["middleName"];
            $username = $rowStudentInfo["username"];
            $password = $rowStudentInfo["password"];
            $phoneNumber = $rowStudentInfo["phoneNumber"];
            $address = $rowStudentInfo["address"];
            $status = $rowStudentInfo["status"];
            $dateOfExamination = $rowStudentInfo["dateOfExamination"];
            $lastSchoolAttended = $rowStudentInfo["lastSchoolAttended"];
            $course = $rowStudentInfo["course"];
            $suggestedCourse = $rowStudentInfo["suggestedCourse"];
            $score = $rowStudentInfo["score"];
            $accountLock = $rowStudentInfo["takeExam"];

            echo '
            <form action="./includes/studentInfo.php" method="POST">
                <div class="container studentInfoContainer">
                    <div class="row">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Student Information</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="lastName">Lastname:</label>
                                            <input type="text" class="form-control" id="lastName" name="lastName" value=' . $lastName . '>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="firstName">Firstname:</label>
                                            <input type="text" class="form-control" id="firstName" name="firstName" value=' . $firstName . '>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="middleName">Middlename:</label>
                                            <input type="text" class="form-control" id="middleName" name="middleName" value=' . $middleName . '>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="status">Status:</label>
                                        <select id="status" name="status" class="browser-default custom-select">
                                            <option selected>' . $status . '</option>
                                            <option></option>
                                            <option value="Interested">Interested</option>
                                            <option value="Not Interested">Not Interested</option>
                                            <option value="Enrolled">Enrolled</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- End of Row -->
                                <div class="row">
                                <input type="hidden" class="form-control" id="id" name="id" value=' . $id . '>
                                <input type="hidden" class="form-control" id="studentId" name="studentId" value=' . $studentId . '>
                                <input type="hidden" class="form-control" id="search" name="search" value=' . $search . '>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="examScore">Score:</label>
                                            <input type="text" class="form-control" id="examScore" name="examScore" value=' . $score . '>
                                            <input type="hidden" class="form-control" id="examScore" name="examScore" value=' . $score . '>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="course">Course:</label>
                                        <select id="course" class="browser-default custom-select" name ="course" value="' . $course . '">
                                            <option selected>' . $course . '</option>
                                            <option></option>
                                            <option>Information Technology</option>
                                            <option>Computer Science</option>
                                            <option>ACT</option>
                                            <option>IS</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="phoneNumber">Phone Number:</label>
                                            <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" value=' . $phoneNumber . '>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="lastSchoolAttended">Last School Attended:</label>
                                        <select value="' . $lastSchoolAttended . '" id="selectedLastSchoolAttended" class="browser-default custom-select" name="lastSchoolAttended">
                                            <option selected>' . $lastSchoolAttended . '</option>
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
                                </div>
                                <!-- End of Row -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="address">Address:</label>
                                            <input type="text" class="form-control" id="address" name="address" value=' . $address . '>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                    </div>
                                </div>
                                <!-- End of Row -->
                                <div class="row">
                                    <div class="col-lg-3">
                                    </div>
                                    <div class="col-lg-4">
                                    </div>
                                    <div class="col-lg-2">
                                    </div>
                                </div>
                                <!-- End of Row -->
                                <div class="row">
                                    <div class="col-lg-3">
                                    </div>
                                    <div class="col-lg-3 btnUpdateMargin">
                                        <button name="btnStudentInfoUpdate" class="btn btn-success cgStudentInfoBtn" type="submit">Update</button>
                                    </div>
                                    <div class="col-lg-3">
                                        <button onclick="return confirmDelete()" name="btnStudentInfoDelete" class="btn btn-danger cgStudentInfoBtn" type="submit">Delete</button>
                                    </div>
                                    <div class="col-lg-3 btnUpdateMargin">
                                        <button name="btnStudentInfoPrint" class="btn btn-info cgStudentInfoBtn" type="submit">Print</button>
                                    </div>
                                </div>
                                <!-- End of Row -->
                            </div>
                            <!-- End of Card Body -->
                        </div>
                    </div>
                    <!-- End of Result Container -->
                </div>
            </form>
            <!-- End of Form -->
            ';
        }
    } else {
        echo 'No Result';
    }
    mysqli_close($conn);
}

// SELECT ALL
else if ($studentID == '') {
    $gStudentInfo = "SELECT * FROM user WHERE  userLevel != 0 AND userLevel != 1 order by id desc";
    $rStudentInfo = mysqli_query($conn, $gStudentInfo);

    if (mysqli_num_rows($rStudentInfo) > 0) {
        while ($rowStudentInfo = mysqli_fetch_assoc($rStudentInfo)) {
            $id = $_GET["id"];
            $search = $_GET["search"];
            $studentId = $rowStudentInfo["id"];
            $lastName = $rowStudentInfo["lastName"];
            $firstName = $rowStudentInfo["firstName"];
            $middleName = $rowStudentInfo["middleName"];
            $username = $rowStudentInfo["username"];
            $password = $rowStudentInfo["password"];
            $phoneNumber = $rowStudentInfo["phoneNumber"];
            $address = $rowStudentInfo["address"];
            $status = $rowStudentInfo["status"];
            $dateOfExamination = $rowStudentInfo["dateOfExamination"];
            $lastSchoolAttended = $rowStudentInfo["lastSchoolAttended"];
            $course = $rowStudentInfo["course"];
            $suggestedCourse = $rowStudentInfo["suggestedCourse"];
            $score = $rowStudentInfo["score"];
            $accountLock = $rowStudentInfo["takeExam"];

            echo '
            <form action="./includes/studentInfo.php" method="POST">
                <div class="container studentInfoContainer">
                    <div class="row">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Student Information</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="lastName">Lastname:</label>
                                            <input type="text" class="form-control" id="lastName" name="lastName" value=' . $lastName . '>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="firstName">Firstname:</label>
                                            <input type="text" class="form-control" id="firstName" name="firstName" value=' . $firstName . '>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="middleName">Middlename:</label>
                                            <input type="text" class="form-control" id="middleName" name="middleName" value=' . $middleName . '>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="status">Status:</label>
                                        <select id="status" name="status" class="browser-default custom-select">
                                            <option selected>' . $status . '</option>
                                            <option></option>
                                            <option value="Interested">Interested</option>
                                            <option value="Not Interested">Not Interested</option>
                                            <option value="Enrolled">Enrolled</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- End of Row -->
                                <div class="row">
                                <input type="hidden" class="form-control" id="id" name="id" value=' . $id . '>
                                <input type="hidden" class="form-control" id="studentId" name="studentId" value=' . $studentId . '>
                                <input type="hidden" class="form-control" id="search" name="search" value=' . $search . '>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="examScore">Score:</label>
                                            <input type="text" class="form-control" id="examScore" name="examScore" value=' . $score . '>
                                            <input type="hidden" class="form-control" id="examScore" name="examScore" value=' . $score . '>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="course">Course:</label>
                                        <select id="course" class="browser-default custom-select" name ="course" value="' . $course . '">
                                            <option selected>' . $course . '</option>
                                            <option></option>
                                            <option>Information Technology</option>
                                            <option>Computer Science</option>
                                            <option>ACT</option>
                                            <option>IS</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="phoneNumber">Phone Number:</label>
                                            <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" value=' . $phoneNumber . '>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="lastSchoolAttended">Last School Attended:</label>
                                        <select value="' . $lastSchoolAttended . '" id="selectedLastSchoolAttended" class="browser-default custom-select" name="lastSchoolAttended">
                                            <option selected>' . $lastSchoolAttended . '</option>
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
                                </div>
                                <!-- End of Row -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="address">Address:</label>
                                            <input type="text" class="form-control" id="address" name="address" value=' . $address . '>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                    </div>
                                </div>
                                <!-- End of Row -->
                                <div class="row">
                                    <div class="col-lg-3">
                                    </div>
                                    <div class="col-lg-4">
                                    </div>
                                    <div class="col-lg-2">
                                    </div>
                                </div>
                                <!-- End of Row -->
                                <div class="row">
                                    <div class="col-lg-3">
                                    </div>
                                    <div class="col-lg-3 btnUpdateMargin">
                                        <button name="btnStudentInfoUpdate" class="btn btn-success cgStudentInfoBtn" type="submit">Update</button>
                                    </div>
                                    <div class="col-lg-3">
                                        <button onclick="return confirmDelete()" name="btnStudentInfoDelete" class="btn btn-danger cgStudentInfoBtn" type="submit">Delete</button>
                                    </div>
                                    <div class="col-lg-3 btnUpdateMargin">
                                        <button name="btnStudentInfoPrint" class="btn btn-info cgStudentInfoBtn" type="submit">Print</button>
                                    </div>
                                </div>
                                <!-- End of Row -->
                            </div>
                            <!-- End of Card Body -->
                        </div>
                    </div>
                    <!-- End of Result Container -->
                </div>
            </form>
            <!-- End of Form -->
            ';
        }
    } else {
        $firstName = 'No Result';
    }
    mysqli_close($conn);
}
// END OF SELECT ALL
