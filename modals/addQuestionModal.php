<!-- Register Student Modal-->
<div class="modal fade" id="registerStudentModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Register Student</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="./includes/registerUser.php" method="POST">
                    <div class="row">
                        <input required type="hidden" class="form-control form-control-user" id="id" name="id" value=<?php echo $_GET['id']; ?>>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input required type="text" class="form-control form-control-user" id="username" name="username" aria-describedby="usernameHelp" placeholder="Username">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input required type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <!-- End of Row 1 -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="lastName">Lastname:</label>
                                <input required type="text" class="form-control form-control-user" id="lastName" name="lastName" placeholder="Lastname">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="firstName">Firstname:</label>
                                <input required type="text" class="form-control form-control-user" id="firstName" name="firstName" placeholder="Firstname">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="middleName">Middlename:</label>
                                <input required type="text" class="form-control form-control-user" id="middleName" name="middleName" placeholder="Middlename">
                            </div>
                        </div>
                    </div>
                    <!-- End of Row 2 -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input required type="text" class="form-control form-control-user" id="address" name="address" placeholder="Address">
                            </div>
                        </div>
                    </div>
                    <!-- End of Row 3 -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="phoneNumber">Phone Number:</label>
                                <input required type="number" class="form-control form-control-user" id="phoneNumber" name="phoneNumber" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="dropDownCourse">Courses:</label>
                                <select required name="selectedCourse" class="form-control" id="dropDownCourse">
                                    <option></option>
                                    <option>Information Technology</option>
                                    <option>Computer Science</option>
                                    <option>ACT</option>
                                    <option>IS</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- End of Row 4 -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="dropDownSchool">Last School Attended:</label>
                                <select required name="selectedSchool" class="form-control" id="dropDownSchool">
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
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="dropDownStatus">Status:</label>
                                <select name="selectedStatus" class="form-control" id="dropDownStatus">
                                    <option></option>
                                    <option value="Taked Exam">Take Exam</option>
                                    <option>Enroll</option>
                                    <option>Undecided</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- End of Row 5 -->
                    <div class="modal-footer">
                        <button type="submit" name="btnRegister" class="btn btn-primary">Register</button>
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>