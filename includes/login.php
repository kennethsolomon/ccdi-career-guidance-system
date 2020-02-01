<?php 
session_start();

include_once('./connection.php');

$username=$_POST['username']; 
$password=$_POST['password']; 

if(isset($_POST['btnLogin'])) { 

    $username = stripslashes($username);
    $password = stripslashes($password);

    $sql="SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result=mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
      while($row = mysqli_fetch_assoc($result)) {
         $userLevel = $row["userLevel"];
      }
         session_start();
         $_SESSION['loggedin'] = true;
         $_SESSION['username'] = $username;
         $_SESSION['userLevel'] = $userLevel;
     } else {
         $_SESSION['message'] = 'Wrong Username or Password';
     }
     mysqli_close($conn);
     if($userLevel == 0){
      header('location: ./../home.php');
     } else if ($userLevel == 1){
        
     }

}

?>