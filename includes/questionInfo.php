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

        $url = "./../viewQuestionInfo.php?id=$id&questionNumber=$questionNumber&search=1";
        $url = str_replace(PHP_EOL, '', $url);
        header("Location: $url");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

if (isset($_POST['btnAddQuestion'])) {
    $id = $_POST['id'];
    $question = $_POST['question'];
    $letterA = $_POST['letterA'];
    $letterB = $_POST['letterB'];
    $letterC = $_POST['letterC'];
    $letterD = $_POST['letterD'];
    $correctAnswer = $_POST['correctAnswer'];


    $sql = "SELECT * FROM examQuestion";
    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);
    if ($count > 19) {
        $_SESSION['message'] = 'You Can Only Have 20 Questions!';
        $url = "./../admin.php?id=$id";
        $url = str_replace(PHP_EOL, '', $url);
        header("Location: $url");
    } else {
        $sql = "INSERT INTO examQuestion (
        question, 
        letterA, 
        letterB, 
        letterC, 
        letterD, 
        correctAnswer
        ) VALUES (
        '$question',
        '$letterA',
        '$letterB',
        '$letterC',
        '$letterD',
        '$correctAnswer'
        )";

        if (mysqli_query($conn, $sql)) {
            $_SESSION['message'] = 'Add Question Successfully!';
            $url = "./../admin.php?id=$id";
            $url = str_replace(PHP_EOL, '', $url);
            header("Location: $url");
        } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
        $conn->close();
    }
}

if (isset($_POST['btnDeleteAllQuestion'])) {
    $id = $_POST['id'];
    $sql = "TRUNCATE TABLE examQuestion";
    if (mysqli_query($conn, $sql)) {
        $_SESSION['message'] = 'Delete All Questions Successfully!';
        $url = "./../admin.php?id=$id";
        $url = str_replace(PHP_EOL, '', $url);
        header("Location: $url");
    } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    $conn->close();
}
