<?php
include_once './includes/connection.php';
$id = $_GET['id'];
$questionNumber = $_GET['questionNumber'];

if ($_GET['search'] == 1 && $_GET['questionNumber'] != '') {
    $gQuestionInfo = "SELECT * FROM examQuestion WHERE id='$questionNumber'";
    $rQuestionInfo = mysqli_query($conn, $gQuestionInfo);

    if (mysqli_num_rows($rQuestionInfo) > 0) {
        while ($rowQuestionInfo = mysqli_fetch_assoc($rQuestionInfo)) {
            $id = $_GET["id"];
            $search = $_GET["search"];
            $questionNumber = $rowQuestionInfo["id"];
            $question = $rowQuestionInfo["question"];
            $letterA = $rowQuestionInfo["letterA"];
            $letterB = $rowQuestionInfo["letterB"];
            $letterC = $rowQuestionInfo["letterC"];
            $letterD = $rowQuestionInfo["letterD"];
            $correctAnswer = $rowQuestionInfo["correctAnswer"];

            echo '
            <form action="./includes/questionInfo.php" method="POST">
                <div class="container">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Question Number ' . $questionNumber . '</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            <input type="hidden" class="form-control" id="id" name="id" value=' . $id . '>
                            <input type="hidden" class="form-control" id="questionNumber" name="questionNumber" value=' . $questionNumber . '>
                            <input type="hidden" class="form-control" id="questionNumber" name="questionNumber" value=' . $search . '>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="question">Question:</label>
                                        <input type="text" class="form-control" id="question" name="question" value="' . $question . '">
                                    </div>
                                </div>
                            </div>
                            <!-- End of Row -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="letterA">Choice 1:</label>
                                        <input type="text" class="form-control" id="letterA" name="letterA" value="' . $letterA . '">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="letterB">Choice 2:</label>
                                        <input type="text" class="form-control" id="letterB" name="letterB" value="' . $letterB . '">
                                    </div>
                                </div>
                            </div>
                            <!-- End of Row -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="letterC">Choice 3:</label>
                                        <input type="text" class="form-control" id="letterC" name="letterC" value="' . $letterC . '">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="letterD">Choice 4:</label>
                                        <input type="text" class="form-control" id="letterD" name="letterD" value="' . $letterD . '">
                                    </div>
                                </div>
                            </div>
                            <!-- End of Row -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="correctAnswer">Correct Answer:</label>
                                        <input type="text" class="form-control" id="correctAnswer" name="correctAnswer" value="' . $correctAnswer . '">
                                    </div>
                                </div>
                            </div>
                            <!-- End of Row -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <button name="btnQuestionInfoUpdate" class="btn btn-success adminQuestionUpdate" type="submit">Update</button>
                                </div>
                            </div>
                            <!-- End of Row -->
                        </div>
                        <!-- End of Card Body -->
                    </div>
                </div>
                <!-- End of Result Container -->
            </form>
            <!-- End of Form -->
            ';
        }
    } else {
        echo 'No Result';
    }
    mysqli_close($conn);
}

// SELECT ALL
else if ($_GET['questionNumber'] == '') {
    $gQuestionInfo = "SELECT * FROM examQuestion";
    $rQuestionInfo = mysqli_query($conn, $gQuestionInfo);

    if (mysqli_num_rows($rQuestionInfo) > 0) {
        while ($rowQuestionInfo = mysqli_fetch_assoc($rQuestionInfo)) {
            $id = $_GET["id"];
            $questionNumber = $rowQuestionInfo["id"];
            $question = $rowQuestionInfo["question"];
            $letterA = $rowQuestionInfo["letterA"];
            $letterB = $rowQuestionInfo["letterB"];
            $letterC = $rowQuestionInfo["letterC"];
            $letterD = $rowQuestionInfo["letterD"];
            $correctAnswer = $rowQuestionInfo["correctAnswer"];

            echo '
            <form action="./includes/questionInfo.php" method="POST">
                <div class="container">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Question Number ' . $questionNumber . '</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            <input type="hidden" class="form-control" id="id" name="id" value=' . $id . '>
                            <input type="hidden" class="form-control" id="questionNumber" name="questionNumber" value=' . $questionNumber . '>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="question">Question:</label>
                                        <input type="text" class="form-control" id="question" name="question" value="' . $question . '">
                                    </div>
                                </div>
                            </div>
                            <!-- End of Row -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="letterA">Choice 1:</label>
                                        <input type="text" class="form-control" id="letterA" name="letterA" value="' . $letterA . '">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="letterB">Choice 2:</label>
                                        <input type="text" class="form-control" id="letterB" name="letterB" value="' . $letterB . '">
                                    </div>
                                </div>
                            </div>
                            <!-- End of Row -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="letterC">Choice 3:</label>
                                        <input type="text" class="form-control" id="letterC" name="letterC" value="' . $letterC . '">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="letterD">Choice 4:</label>
                                        <input type="text" class="form-control" id="letterD" name="letterD" value="' . $letterD . '">
                                    </div>
                                </div>
                            </div>
                            <!-- End of Row -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="correctAnswer">Correct Answer:</label>
                                        <input type="text" class="form-control" id="correctAnswer" name="correctAnswer" value="' . $correctAnswer . '">
                                    </div>
                                </div>
                            </div>
                            <!-- End of Row -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <button name="btnQuestionInfoUpdate" class="btn btn-success adminQuestionUpdate" type="submit">Update</button>
                                </div>
                            </div>
                            <!-- End of Row -->
                        </div>
                        <!-- End of Card Body -->
                    </div>
                </div>
                <!-- End of Result Container -->
            </form>
            <!-- End of Form -->
            ';
        }
    } else {
        $firstName = 'No Result';
    }
    mysqli_close($conn);
}
// END OF SELECT ALL