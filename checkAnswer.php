<?php
include_once('./includes/connection.php');

$id = $_POST['id'];
$examId = $_POST['examId'];
$answer = $_POST['answer'];
$correctAnswer = $_POST['correctAnswer'];
$eNum = $_POST['eNum'];


if (isset($_POST['saveAnswer'])) {
    if ($answer == $correctAnswer) {
        $sql = "SELECT * FROM examResult WHERE studentId='$id'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $examScore = $row['examScore'];
            $examResultId = $row['id'];
            $dbENum = $row['eNum'];
        }

        if ($dbENum !== $eNum) {
            $sql2 = "UPDATE examResult SET examScore=$examScore + 1, eNum=$eNum WHERE studentId='$id' AND id = '$examResultId'";
        } else {
            $sql2 = "UPDATE examResult SET examScore=$examScore, eNum=$eNum WHERE studentId='$id' AND id = '$examResultId'";
        }


        if ($conn->query($sql2) === TRUE) {
            $url = "./questions.php?id=$id&examId=$examId&eNum=$eNum";
            $url = str_replace(PHP_EOL, '', $url);
            header("Location: $url");
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $conn->close();
    } else {
        $url = "./questions.php?id=$id&examId=$examId&eNum=$eNum";
        $url = str_replace(PHP_EOL, '', $url);
        header("Location: $url");
    }
}
