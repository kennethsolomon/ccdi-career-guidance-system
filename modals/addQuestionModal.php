<!-- Register Student Modal-->
<div class="modal fade" id="addQuestionModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Add New Question</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="./includes/questionInfo.php" method="POST">
                    <div class="row">
                        <input required type="hidden" class="form-control form-control-user" id="id" name="id" value=<?php echo $_GET['id']; ?>>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="question">Question:</label>
                                <input required type="text" class="form-control form-control-user" id="question" name="question" aria-describedby="questionHelp" placeholder="Question">
                            </div>
                        </div>
                    </div>
                    <!-- End of Row 1 -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="letterA">Choice 1:</label>
                                <input required type="text" class="form-control form-control-user" id="letterA" name="letterA" placeholder="Choice 1">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="letterB">Choice 2:</label>
                                <input required type="text" class="form-control form-control-user" id="letterB" name="letterB" placeholder="Choice 2">
                            </div>
                        </div>
                    </div>
                    <!-- End of Row 2 -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="letterC">Choice 3:</label>
                                <input required type="text" class="form-control form-control-user" id="letterC" name="letterC" placeholder="Choice 3">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="letterD">Choice 4:</label>
                                <input required type="text" class="form-control form-control-user" id="letterD" name="letterD" placeholder="Choice 4">
                            </div>
                        </div>
                    </div>
                    <!-- End of Row 3 -->
                    <div class="row">
                        <input required type="hidden" class="form-control form-control-user" id="id" name="id" value=<?php echo $_GET['id']; ?>>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="correctAnswer">Correct Answer:</label>
                                <input required type="text" class="form-control form-control-user" id="correctAnswer" name="correctAnswer" aria-describedby="correctAnswerHelp" placeholder="Correct Answer">
                            </div>
                        </div>
                    </div>
                    <!-- End of Row 4 -->
                    <div class="modal-footer">
                        <button type="submit" name="btnAddQuestion" class="btn btn-primary">Add Quesiton</button>
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>