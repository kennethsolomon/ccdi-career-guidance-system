<!-- View Student Modal-->
<div class="modal fade" id="viewStudentModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">View Student</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="./includes/studentInfo.php" method="POST">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="lastName">Enter Lastname:</label>
                                <input type="text" class="form-control form-control-user" id="lastName" name="lastName"
                                    aria-describedby="usernameHelp" placeholder="Lastname">
                                <input required type="hidden" class="form-control form-control-user" id="id" name="id"
                                    value="<?php echo $_GET['id']; ?>">
                            </div>
                        </div>
                    </div>
                    <!-- End of Row 1 -->

                    <div class="modal-footer">
                        <button type="submit" name="btnViewStudent" class="btn btn-primary">View</button>
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
