<?php
session_start();

include_once './connection.php';

if (isset($_POST['btnTextBy'])) {
    //$_SESSION['error_message'] = 'Please Select an Action!';
    $listOfMunicipality = $_POST['listOfMunicipality'];
    $listOfSchool = $_POST['listOfSchool'];
	$_SESSION['message'] = 'Category Updated Successfully!';
    $url = "./../phoneNumbers.php?id=1&municipality=$listOfMunicipality&school=$listOfSchool";
    $url = str_replace(PHP_EOL, '', $url);
    header("Location: $url");
}  

if (isset($_POST['btnUpdateStatus'])) {
	if(isset($_POST['phoneText'])){
		$checkbox1=$_POST['phoneText'];  
		$statusList=$_POST['statusList'];  
		foreach($checkbox1 as $chk1)  
			{  
			  //$chk .= $chk1.",";  
				echo $chk1.',';

			$sql = "UPDATE user SET 
				status='$statusList' 
				WHERE 
				phoneNumber='$chk1'";
				if ($conn->query($sql) === TRUE) {
					$_SESSION['message'] = 'Update Status Successfully!';

					$url = "./../phoneNumbers.php?id=1&school=&municipality=";
					$url = str_replace(PHP_EOL, '', $url);
					header("Location: $url");
				} else {
					echo "Error updating record: " . $conn->error;
				}
			}

    }else {

    $_SESSION['error_message'] = 'Please Select a Student!';
    $url = "./../phoneNumbers.php?id=1";
    $url = str_replace(PHP_EOL, '', $url);
    header("Location: $url");
    }
}  

if (isset($_POST['btnViewQuestion'])) {
    $questionNumber = $_POST['questionNumber'];
    $id = $_POST['id'];
    $url = "./../viewQuestionInfo.php?id=$id&questionNumber=$questionNumber&search=1";
    $url = str_replace(PHP_EOL, '', $url);
    header("Location: $url");
}

if (isset($_POST['btnQuestionInfoUpdate'])) {
    $id = $_POST["id"];
    $questionNumber = str_replace("'","\'",$_POST['questionNumber']);
    $question = str_replace("'","\'",$_POST['question']);
    $letterA = str_replace("'","\'",$_POST['letterA']);
    $letterB = str_replace("'","\'",$_POST['letterB']);
    $letterC = str_replace("'","\'",$_POST['letterC']);
    $letterD = str_replace("'","\'",$_POST['letterD']);
    $correctAnswer = str_replace("'","\'",$_POST['correctAnswer']);

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
    $question = str_replace("'","\'",$_POST['question']);
    $letterA = str_replace("'","\'",$_POST['letterA']);
    $letterB = str_replace("'","\'",$_POST['letterB']);
    $letterC = str_replace("'","\'",$_POST['letterC']);
    $letterD = str_replace("'","\'",$_POST['letterD']);
    $correctAnswer = str_replace("'","\'",$_POST['correctAnswer']);


    $sql = "SELECT * FROM examQuestion";
    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);
    if ($count > 19) {
        $_SESSION['message'] = 'You Can Only Have 20 Questions!';
        $url = "./../admin.php?id=$id";
        $url = str_replace(PHP_EOL, '', $url);
        header("Location: $url");
    } else {
        $sql = "INSERT INTO examquestion (
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
