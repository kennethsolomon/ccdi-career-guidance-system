<?php
session_start();

include_once './connection.php';

if (isset($_POST['btnResetAllStudentData'])) {
    $id = $_GET["id"];

    $sql = "DELETE FROM user WHERE userLevel != 0 AND userLevel != 1";

    if ($conn->query($sql) === TRUE) {
        $sql2 = "ALTER TABLE user AUTO_INCREMENT = 3";
        if ($conn->query($sql2) === TRUE) {
            $_SESSION['message'] = 'Reset Data Successfully!';
            header("location: ./../admin.php?id=$id");
        } else {
            echo "Error reseting record: " . $conn->error;
        }
    } else {
        echo "Error reseting record: " . $conn->error;
    }

    $conn->close();
}
