<!-- View Student Modal-->
<div class="modal fade" id="updateStatusModal" tabindex="-1"  role="dialog" aria-labelledby="modalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Select School or Municipality</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">

        <form action="./includes/questionInfo.php" method="POST">
            <div class="container-fluid" id="patientTable">
                    <div class="row">
                            <div class="col-lg-4">
                            <label for="listofSchool">School</label>
                                    <?php
                                    $sql = "SELECT * FROM municipality ORDER BY id desc";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        echo '
                                            <select name="listOfSchool" class="form-control" id="dropDownSchool">
                                                <option value=""></option>
                                        ';
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $name = $row['name'];
                                            $school = $row['school'];
                                            echo '
                                                <option value="'.$school.'">'.$school.'</option>
                                            ';

                                        }
                                            echo '
                                                </select>
                                                ';
                                    }
                                    ?>

                            </div>
                            <div class="col-lg-4">
                            <label for="listOfMunicipality">Municipality</label>
                                    <?php
                                    $sql = "SELECT * FROM list_municipality";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        echo '
                                            <select name="listOfMunicipality" class="form-control" id="dropDownSchool">
                                                <option value=""></option>
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
                            <div class="col-lg-4">
                            <label for="listOfMunicipality">Course</label>
                                    <?php
                                    $sql = "SELECT * FROM course";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        echo '
                                            <select name="listOfCourse" class="form-control" id="dropDownSchool">
                                                <option value=""></option>
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
                </div>                            <!-- End Dash Board Row -->
</br>
                    <div class="modal-footer">
                        <button type="submit" name="btnTextBy" class="btn btn-primary">Go</button>
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
