<!-- View Student Modal-->
<div class="modal fade" id="updateStatusModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Update Status</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="./includes/questionInfo.php" method="POST">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input required type="hidden" class="form-control form-control-user" id="id" name="id"
                                    value="<?php echo $_GET['id']; ?>">
<?php 
$sql = "SELECT * FROM user where userLevel=3 AND textStatus!=3 AND status!='Interested' AND status!='Enrolled' AND status!='No Response' ORDER BY id desc";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        echo '
                                        <select name="statusNameList" class="form-control" id="updateStatusForm">';
                                        while ($row = mysqli_fetch_assoc($result)) {
                                                $id = $row['id'];
                                                $lastName = $row['lastName'];
                                                $firstName = $row['firstName'];
                                                $middleName = $row['middleName'];
                                                $status = $row['status'];
                                                $phoneNumber = $row['phoneNumber'];
                                            echo'
                                            <option name="studentName" value="'.$id.'">'.$phoneNumber.'-'.$lastName.', '. $firstName .' '. $middleName.' - '. $status.'</option>
                                            ';
                                        }
                                        echo'
                                        </select>
                                        ';
                                    } else {
                                        echo "0 results";
                                    }
?>
                            </div>
                        </div>
                            <div class="col-lg-6">
                                <select required name="statusList" class="form-control" id="dropDownSchool">
                                    <option value=""></option>
                                    <option value='Interested'>Interested</option>
                                    <option value='Not Interested'>Not Interested</option>
                                    <option value='No Response'>No Response</option>
                                    <option value='Enrolled'>Enrolled</option>
                                </select>
                            </div>
                    </div>
                    <!-- End of Row 1 -->

                    <div class="modal-footer">
                        <button type="submit" name="btnUpdateStatus" class="btn btn-primary">Update</button>
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
