<?php
include_once './includes/connection.php';
$id = $_GET['id'];
$school_id = $_GET['school_id'];
    $sql = "SELECT * FROM municipality WHERE id='$school_id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row["name"];
            $school = $row["school"];
            echo '
            <form action="./includes/registerUser.php" method="POST">
<input type="hidden" name="school_id" value="'.$school_id.'">
                <div class="container">
                    <div class="row">
                        <div class="card shadow mb-12">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">School Info</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="school">School:</label>
                                            <input type="text" class="form-control" id="school" name="school" value="'.$school.'">
                                        </div>
                                    </div>
';

						$sql = "SELECT * FROM list_municipality";
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0) {
							echo '
                                <div class="col-lg-6">
                                <label for="school">Municipality:</label>
								<select required name="selectMunicipality" class="form-control" id="dropDownCourse">
								<option value="'.$name.'">'.$name.'</option>
								';
							while ($row = mysqli_fetch_assoc($result)) {
								$dbname = $row['name'];
								echo '
									<option value="'.$dbname.'">'.$dbname.'</option>
									';
							}
							echo '
								</select>
                                </div>
								';
						}
                        echo'
                                <div class="row">
                                    <div class="col-lg-6">
                                        <button name="btnSchoolUpdate" class="btn btn-success cgStudentInfoBtn" type="submit">Update</button>
                                    </div>
                                    <div class="col-lg-6">
                                        <button onclick="return confirmDelete()" name="btnSchoolDelete" class="btn btn-danger cgStudentInfoBtn" type="submit">Delete</button>
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
