<?php
session_start();
include_once('./connection.php');

if (isset($_POST['numberTexted1'])) {
$sql = "SELECT * FROM user Where userLevel=3 AND textStatus=0 AND status!= 'Interested' AND status!='Enrolled' AND status !='No Response' ORDER BY id desc";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $getTextStatus = $row['textStatus'];
        $currentDate = date("Y-m-d");
        $id = $row['id'];
        $textStatus = $getTextStatus + 1;

        $sql = "UPDATE user SET 
            textStatus='$textStatus',
            textedDate = '$currentDate'
            WHERE 
            id='$id' AND textStatus=0 AND textedDate!= '$currentDate'";
        if ($conn->query($sql) === TRUE) {
            //$_SESSION['message'] = 'Question Update Successfully!';
                $sql = "UPDATE user SET 
                    status='No Response'
                    WHERE 
                    textStatus=3";

                if ($conn->query($sql) === TRUE) {
                    $_SESSION['message'] = 'Texted Successfully!';
                    $url = "./../phoneNumbers.php?id=1&school=&municipality=";
                    $url = str_replace(PHP_EOL, '', $url);
                    header("Location: $url");
                        
                }

        } else {
            echo "Error updating record: " . $conn->error;
        }


    }
} else {
    echo "0 results";
}
}
if (isset($_POST['numberTexted2'])) {
$sql = "SELECT * FROM user Where userLevel=3 AND textStatus=1 AND status!= 'Interested' AND status!='Enrolled' AND status !='No Response' ORDER BY id desc";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $getTextStatus = $row['textStatus'];
        $currentDate = date("Y-m-d");
        $id = $row['id'];
        $textStatus = $getTextStatus + 1;

        $sql = "UPDATE user SET 
            textStatus='$textStatus',
            textedDate = '$currentDate'
            WHERE 
            id='$id' AND textStatus=1 AND textedDate!= '$currentDate'";
        if ($conn->query($sql) === TRUE) {
            //$_SESSION['message'] = 'Question Update Successfully!';
                $sql = "UPDATE user SET 
                    status='No Response'
                    WHERE 
                    textStatus=3";

                if ($conn->query($sql) === TRUE) {
                    $_SESSION['message'] = 'Texted Successfully!';
                    $url = "./../phoneNumbers.php?id=1&school=&municipality=";
                    $url = str_replace(PHP_EOL, '', $url);
                    header("Location: $url");
                        
                }

        } else {
            echo "Error updating record: " . $conn->error;
        }


    }
} else {
    echo "0 results";
}
}
if (isset($_POST['numberTexted3'])) {
$sql = "SELECT * FROM user Where userLevel=3 AND textStatus=2 AND status!= 'Interested' AND status!='Enrolled' AND status !='No Response' ORDER BY id desc";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $getTextStatus = $row['textStatus'];
        $currentDate = date("Y-m-d");
        $id = $row['id'];
        $textStatus = $getTextStatus + 1;

        $sql = "UPDATE user SET 
            textStatus='$textStatus',
            textedDate = '$currentDate'
            WHERE 
            id='$id' AND textStatus=2 AND textedDate!= '$currentDate'";
        if ($conn->query($sql) === TRUE) {
            //$_SESSION['message'] = 'Question Update Successfully!';
                $sql = "UPDATE user SET 
                    status='No Response'
                    WHERE 
                    textStatus=3";

                if ($conn->query($sql) === TRUE) {
                    $_SESSION['message'] = 'Texted Successfully!';
                    $url = "./../phoneNumbers.php?id=1&school=&municipality=";
                    $url = str_replace(PHP_EOL, '', $url);
                    header("Location: $url");
                        
                }

        } else {
            echo "Error updating record: " . $conn->error;
        }


    }
} else {
    echo "0 results";
}
}

?>
