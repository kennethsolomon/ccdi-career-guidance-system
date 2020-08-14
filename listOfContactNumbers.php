
                                         <!-- Query to get all the phone numbers -->
                                         <?php
                                            if (isset($_GET['selectedTemplate'])) {
                                                $templateSelected = $_GET['selectedTemplate'];


                                                if($templateSelected=="Template1"){

                                                // Get Date and Time
                                                date_default_timezone_set("Asia/Manila");
                                                //Test Trigger if Working
                                                // $currentDate = '2020-02-21 00:00:00';
                                                $getCurrentDate = date("Y-m-d");
                                                $currentDate = $getCurrentDate . ' ' . '00:00:00';
                                                if (isset($_GET['school'])) {
                                                    $school = $_GET['school'];
                                                }
                                                if (isset($_GET['municipality'])) {
                                                    $municipality = $_GET['municipality'];
                                                }
                                                if (isset($_GET['course'])) {
                                                    $course = $_GET['course'];
                                                }

                                                if(!empty($school) && !empty($municipality) && !empty($course)){
                                                    $sql = "SELECT * FROM user where userLevel=3 AND textStatus=0 AND textedDate!='$getCurrentDate' AND status !='Enrolled' AND status !='Interested' AND lastSchoolAttended='$school' AND municipality='$municipality' AND course='$course' ORDER BY id desc";
                                                } else if(empty($school) && empty($municipality) && empty($course)){
                                                    $sql = "SELECT * FROM user where userLevel=3 AND textStatus=0 AND textedDate!='$getCurrentDate' AND status !='Enrolled' AND status !='Interested' ORDER BY id desc";
                                                } else if(!empty($school) && !empty($municipality)){
                                                    $sql = "SELECT * FROM user where userLevel=3 AND textStatus=0 AND textedDate!='$getCurrentDate' AND status !='Enrolled' AND status !='Interested' AND lastSchoolAttended='$school' AND municipality='$municipality' ORDER BY id desc";
                                                } else if(!empty($school) && !empty($course)){
                                                    $sql = "SELECT * FROM user where userLevel=3 AND textStatus=0 AND textedDate!='$getCurrentDate' AND status !='Enrolled' AND status !='Interested' AND lastSchoolAttended='$school' AND course='$course' ORDER BY id desc";
                                                } else if(!empty($municipality) && !empty($course)){
                                                    $sql = "SELECT * FROM user where userLevel=3 AND textStatus=0 AND textedDate!='$getCurrentDate' AND status !='Enrolled' AND status !='Interested' AND municipality='$municipality' AND course='$course' ORDER BY id desc";
                                                } else if(!empty($school)){
                                                    $sql = "SELECT * FROM user where userLevel=3 AND textStatus=0 AND textedDate!='$getCurrentDate' AND status !='Enrolled' AND status !='Interested' AND lastSchoolAttended='$school' ORDER BY id desc";
                                                } else if (!empty($municipality)){
                                                    $sql = "SELECT * FROM user where userLevel=3 AND textStatus=0 AND textedDate!='$getCurrentDate' AND status !='Enrolled' AND status !='Interested' AND municipality='$municipality' ORDER BY id desc";
                                                } else if (!empty($course)){
                                                    $sql = "SELECT * FROM user where userLevel=3 AND textStatus=0 AND textedDate!='$getCurrentDate' AND status !='Enrolled' AND status !='Interested' AND course='$course' ORDER BY id desc";
                                                }
                                                $result = mysqli_query($conn, $sql);

                                                if (mysqli_num_rows($result) > 0) {
                                                    echo '<h5 class="mt-2 ml-2">List to Text: </h5> '; 
                                                    $phoneNumbers = "";
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                            $id = $row['id'];
                                                            $textStatus = $row['textStatus'];
                                                            $phoneNumbers .= $row["phoneNumber"].",";
                                                            
                                                    }

                                                    echo '
                                                  <div class="row p-3">
                                                    <input class="form-control" type="text" value="'.$phoneNumbers.'" id="listOfPhoneNumbers">
<div class="col-lg-6 mt-2">
                                                    <button onclick="copyPhoneNumbers()" class="btn btn-success form-control">Copy</button>
</div>
<div class="col-lg-6 mt-2">
                                                     <form method="post" action="./includes/texted.php?municipality='.$_GET['municipality'].'&course='.$_GET['course'].'&school='.$_GET['school'].'">
                                                         <button class="btn btn-info " name="numberTexted1"
                                                             type="submit">Texted</button>
                                                     </form>
</div>

                                                    </div>
                                                    ';
                                                } else {
                                                    echo "0 results";
                                                }

                                                }else if($templateSelected=="Template2"){
                                                // Get Date and Time
                                                date_default_timezone_set("Asia/Manila");
                                                //Test Trigger if Working
                                                // $currentDate = '2020-02-21 00:00:00';
                                                $getCurrentDate = date("Y-m-d");
                                                $currentDate = $getCurrentDate . ' ' . '00:00:00';
                                                if (isset($_GET['school'])) {
                                                    $school = $_GET['school'];
                                                }
                                                if (isset($_GET['municipality'])) {
                                                    $municipality = $_GET['municipality'];
                                                }
                                                if (isset($_GET['course'])) {
                                                    $course = $_GET['course'];
                                                }

                                                if(!empty($school) && !empty($municipality) && !empty($course)){
                                                    $sql = "SELECT * FROM user where userLevel=3 AND textStatus=1 AND textedDate!='$getCurrentDate' AND status !='Enrolled' AND status !='Interested' AND lastSchoolAttended='$school' AND municipality='$municipality' AND course='$course' ORDER BY id desc";
                                                } else if(empty($school) && empty($municipality) && empty($course)){
                                                    $sql = "SELECT * FROM user where userLevel=3 AND textStatus=1 AND textedDate!='$getCurrentDate' AND status !='Enrolled' AND status !='Interested' ORDER BY id desc";
                                                } else if(!empty($school) && !empty($municipality)){
                                                    $sql = "SELECT * FROM user where userLevel=3 AND textStatus=1 AND textedDate!='$getCurrentDate' AND status !='Enrolled' AND status !='Interested' AND lastSchoolAttended='$school' AND municipality='$municipality' ORDER BY id desc";
                                                } else if(!empty($school) && !empty($course)){
                                                    $sql = "SELECT * FROM user where userLevel=3 AND textStatus=1 AND textedDate!='$getCurrentDate' AND status !='Enrolled' AND status !='Interested' AND lastSchoolAttended='$school' AND course='$course' ORDER BY id desc";
                                                } else if(!empty($municipality) && !empty($course)){
                                                    $sql = "SELECT * FROM user where userLevel=3 AND textStatus=1 AND textedDate!='$getCurrentDate' AND status !='Enrolled' AND status !='Interested' AND municipality='$municipality' AND course='$course' ORDER BY id desc";
                                                } else if(!empty($school)){
                                                    $sql = "SELECT * FROM user where userLevel=3 AND textStatus=1 AND textedDate!='$getCurrentDate' AND status !='Enrolled' AND status !='Interested' AND lastSchoolAttended='$school' ORDER BY id desc";
                                                } else if (!empty($municipality)){
                                                    $sql = "SELECT * FROM user where userLevel=3 AND textStatus=1 AND textedDate!='$getCurrentDate' AND status !='Enrolled' AND status !='Interested' AND municipality='$municipality' ORDER BY id desc";
                                                } else if (!empty($course)){
                                                    $sql = "SELECT * FROM user where userLevel=3 AND textStatus=1 AND textedDate!='$getCurrentDate' AND status !='Enrolled' AND status !='Interested' AND course='$course' ORDER BY id desc";
                                                }
                                                $result = mysqli_query($conn, $sql);

                                                if (mysqli_num_rows($result) > 0) {
                                                    echo '<h6>List to Text: </h6> '; 
                                                    $phoneNumbers = "";
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                            $id = $row['id'];
                                                            $textStatus = $row['textStatus'];
                                                            $phoneNumbers .= $row["phoneNumber"].",";
                                                            
                                                    }
                                                    echo '
                                                  <div class="row p-3">
                                                    <input class="form-control" type="text" value="'.$phoneNumbers.'" id="listOfPhoneNumbers">
<div class="col-lg-6 mt-2">
                                                    <button onclick="copyPhoneNumbers()" class="btn btn-success form-control">Copy</button>
</div>
<div class="col-lg-6 mt-2">
                                                     <form method="post" action="./includes/texted.php?municipality='.$_GET['municipality'].'&course='.$_GET['course'].'&school='.$_GET['school'].'">
                                                         <button class="btn btn-info " name="numberTexted1"
                                                             type="submit">Texted</button>
                                                     </form>
</div>

                                                    </div>
                                                    ';
                                                } else {
                                                    echo "0 results";
                                                }

                                                }else if($templateSelected=="Template3"){
                                                // Get Date and Time
                                                date_default_timezone_set("Asia/Manila");
                                                //Test Trigger if Working
                                                // $currentDate = '2020-02-21 00:00:00';
                                                $getCurrentDate = date("Y-m-d");
                                                $currentDate = $getCurrentDate . ' ' . '00:00:00';
                                                if (isset($_GET['school'])) {
                                                    $school = $_GET['school'];
                                                }
                                                if (isset($_GET['municipality'])) {
                                                    $municipality = $_GET['municipality'];
                                                }
                                                if (isset($_GET['course'])) {
                                                    $course = $_GET['course'];
                                                }

                                                if(!empty($school) && !empty($municipality) && !empty($course)){
                                                    $sql = "SELECT * FROM user where userLevel=3 AND textStatus=2 AND textedDate!='$getCurrentDate' AND status !='Enrolled' AND status !='Interested' AND lastSchoolAttended='$school' AND municipality='$municipality' AND course='$course' ORDER BY id desc";
                                                } else if(empty($school) && empty($municipality) && empty($course)){
                                                    $sql = "SELECT * FROM user where userLevel=3 AND textStatus=2 AND textedDate!='$getCurrentDate' AND status !='Enrolled' AND status !='Interested' ORDER BY id desc";
                                                } else if(!empty($school) && !empty($municipality)){
                                                    $sql = "SELECT * FROM user where userLevel=3 AND textStatus=2 AND textedDate!='$getCurrentDate' AND status !='Enrolled' AND status !='Interested' AND lastSchoolAttended='$school' AND municipality='$municipality' ORDER BY id desc";
                                                } else if(!empty($school) && !empty($course)){
                                                    $sql = "SELECT * FROM user where userLevel=3 AND textStatus=2 AND textedDate!='$getCurrentDate' AND status !='Enrolled' AND status !='Interested' AND lastSchoolAttended='$school' AND course='$course' ORDER BY id desc";
                                                } else if(!empty($municipality) && !empty($course)){
                                                    $sql = "SELECT * FROM user where userLevel=3 AND textStatus=2 AND textedDate!='$getCurrentDate' AND status !='Enrolled' AND status !='Interested' AND municipality='$municipality' AND course='$course' ORDER BY id desc";
                                                } else if(!empty($school)){
                                                    $sql = "SELECT * FROM user where userLevel=3 AND textStatus=2 AND textedDate!='$getCurrentDate' AND status !='Enrolled' AND status !='Interested' AND lastSchoolAttended='$school' ORDER BY id desc";
                                                } else if (!empty($municipality)){
                                                    $sql = "SELECT * FROM user where userLevel=3 AND textStatus=2 AND textedDate!='$getCurrentDate' AND status !='Enrolled' AND status !='Interested' AND municipality='$municipality' ORDER BY id desc";
                                                } else if (!empty($course)){
                                                    $sql = "SELECT * FROM user where userLevel=3 AND textStatus=2 AND textedDate!='$getCurrentDate' AND status !='Enrolled' AND status !='Interested' AND course='$course' ORDER BY id desc";
                                                }
                                                $result = mysqli_query($conn, $sql);

                                                if (mysqli_num_rows($result) > 0) {
                                                    echo '<h3>List to Text: </h3> '; 
                                                    $phoneNumbers = "";
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                            $id = $row['id'];
                                                            $textStatus = $row['textStatus'];
                                                            $phoneNumbers .= $row["phoneNumber"].",";
                                                    }
                                                    echo '
                                                  <div class="row p-3">
                                                    <input class="form-control" type="text" value="'.$phoneNumbers.'" id="listOfPhoneNumbers">
<div class="col-lg-6 mt-2">
                                                    <button onclick="copyPhoneNumbers()" class="btn btn-success form-control">Copy</button>
</div>
<div class="col-lg-6 mt-2">
                                                     <form method="post" action="./includes/texted.php?municipality='.$_GET['municipality'].'&course='.$_GET['course'].'&school='.$_GET['school'].'">
                                                         <button class="btn btn-info " name="numberTexted1"
                                                             type="submit">Texted</button>
                                                     </form>
</div>

                                                    </div>
                                                    ';
                                                } else {
                                                    echo "0 results";
                                                }

                                                }

                                            }
                                            ?>
