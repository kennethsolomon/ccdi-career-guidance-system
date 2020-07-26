<!-- View Student Modal-->
<div class="modal fade" id="resetDataModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Export Data</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="./includes/exportStudent.php?<?php echo $_GET['id']; ?>" method="POST">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
<h4>Please enter a year to export</h4>
                                <input name="exportYear" class="form-control" type="number">

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="btnExportData" class="btn btn-danger">Export</button>
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
