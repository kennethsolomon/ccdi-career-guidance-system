<!-- View Student Modal-->
<div class="modal fade" id="announcementModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Annoucement</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
               
            <form action="./includes/announcementControl.php" method="POST">
                    <div class="container">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                            </div>
                            <div class="card-body">
                                <div class="row">
                                <input type="hidden" class="form-control" id="id" name="id" value='<?php echo $_GET['id']; ?>'>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="question">Title:</label>
                                            <input type="text" class="form-control" id="title" name="title" value="">
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Row -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="content">Content :</label>
                                            <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Row -->
                                <button name="btnAnnouncementAdd" class="btn btn-success" type="submit">Add</button>
                            </div>
                            <!-- End of Card Body -->
                        </div>
                    </div>
                    <!-- End of Result Container -->
                </form>
                <!-- End of Form -->
            </div>

        </div>
    </div>
</div>