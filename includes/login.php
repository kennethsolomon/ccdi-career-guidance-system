<?php
session_start();

include_once './connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($_POST['btnLogin'])) {

   $username = stripslashes($username);
   $password = stripslashes($password);

   $sql = "SELECT * FROM user WHERE username='$username' AND password=md5('$password') AND takeExam=0";
   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) == 1) {
      while ($row = mysqli_fetch_assoc($result)) {
         $userLevel = $row["userLevel"];
         $firstName = $row["firstName"];
         $id = $row["id"];
      }
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['firstName'] = $firstName;
      $_SESSION['userLevel'] = $userLevel;
      $_SESSION['takeExam'] = $takeExam;
   } else {
      $_SESSION['message'] = 'Wrong Username or Password';
   }
   mysqli_close($conn);
   if ($userLevel == 0) {
      header("location: ./checkAllExpiredUser.php?id=$id");
   } else if ($userLevel == 3) {
      header("location: ./../exam.php?id=$id");
   } else if ($userLevel == 1) {
      header("location: ./../admin.php?id=$id");
   }
}