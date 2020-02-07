<!-- View Student Modal-->
<div class="modal fade" id="deleteAllQuestionModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Delete</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="./includes/questionInfo.php" method="POST">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <h5>Are you sure you want to delete all the Questions? <b>This Action is not Reversable. </b></h5>
                            </div>
                        </div>
                    </div>
                    <!-- End of Row 1 -->

                    <div class="modal-footer">
                        <button type="submit" name="btnDeleteAllQuestion" class="btn btn-danger">Delete</button>
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>