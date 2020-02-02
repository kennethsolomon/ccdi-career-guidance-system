<?php
include_once('./includes/connection.php');

$id = $_POST['id'];
$answer = $_POST['answer'];
$correctAnswer = $_POST['correctAnswer'];
$eNum = $_POST['eNum'];


if(isset($_POST['saveAnswer'])){
    if($answer == $correctAnswer){
        $sql="SELECT * FROM examResult WHERE studentId='$id'";
        $result=mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)) {
                $examScore = $row['examScore'];
                $examResultId = $row['id'];
                $dbENum = $row['eNum'];
            }

        if($dbENum !== $eNum){
            $sql2 = "UPDATE examResult SET examScore=$examScore + 1, eNum=$eNum WHERE studentId='$id' AND id = '$examResultId'";
        } else {
            $sql2 = "UPDATE examResult SET examScore=$examScore, eNum=$eNum WHERE studentId='$id' AND id = '$examResultId'";
        }
        

        if ($conn->query($sql2) === TRUE) {
            header("location: ./questions.php?id=$id&eNum=$eNum");
        } else {
            echo "Error updating record: " . $conn->error;
        }

    $conn->close();
    } else {
        header("location: ./questions.php?id=$id&eNum=$eNum");
    }
}