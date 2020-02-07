<!-- View Student Modal-->
<div class="modal fade" id="resetDataModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Reset Data</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="./includes/adminInfo.php?<?php echo $_GET['id']; ?>" method="POST">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <h5>Are you sure you want to Reset ALL Student Data? <b>This Action is not Reversable. </b></h5><br>
                                <h6> <i>We Recommend you atleast export data to .xls format before resetting the data.</i><a href="./includes/exportStudent.php"> Export </a> </h6>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="btnResetAllStudentData" class="btn btn-danger">Reset</button>
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>