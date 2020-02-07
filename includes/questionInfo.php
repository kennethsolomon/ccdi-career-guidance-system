<?php
session_start();

include_once './connection.php';

if (isset($_POST['btnViewQuestion'])) {
    $questionNumber = $_POST['questionNumber'];
    $id = $_POST['id'];
    $url = "./../viewQuestionInfo.php?id=$id&questionNumber=$questionNumber&search=1";
    $url = str_replace(PHP_EOL, '', $url);
    header("Location: $url");
}

if (isset($_POST['btnQuestionInfoUpdate'])) {
    $id = $_POST["id"];
    $questionNumber = $_POST['questionNumber'];
    $question = $_POST["question"];
    $letterA = $_POST["letterA"];
    $letterB = $_POST["letterB"];
    $letterC = $_POST["letterC"];
    $letterD = $_POST["letterD"];
    $correctAnswer = $_POST["correctAnswer"];

    $sql = "UPDATE examQuestion SET 
        question='$question', 
        letterA='$letterA', 
        letterB='$letterB', 
        letterC='$letterC', 
        letterD='$letterD',
        correctAnswer='$correctAnswer'
        WHERE 
        id='$questionNumber'";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = 'Question Update Successfully!';
        header("location: ./../viewQuestionInfo.php?id=$id&questionNumber=$questionNumber&search=1");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

if (isset($_POST['btnStudentInfoPrint'])) {
    $id = $_POST["id"];
    $studentId = $_POST['studentId'];
    $username = $_POST['username'];
    header("location: ./../printStudentInfo.php?id=$id&studentId=$studentId&username=$username");
}

if (isset($_POST['btnStudentInfoDelete'])) {
    $id = $_POST["id"];
    $studentId = $_POST['studentId'];
    $search = $_POST['search'];
    $username = $_POST['username'];

    $sql = "DELETE FROM user WHERE id=$studentId";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = 'Student Deleted Successfully!';
        header("location: ./../viewStudentInfo.php?id=$id&studentId=&username=$username&search=$search");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}
