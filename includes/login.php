<?php 
session_start();

include_once('./connection.php');

$username=$_POST['username']; 
$password=$_POST['password']; 

if(isset($_POST['btnLogin'])) { 
    // To protect MySQL injection (more detail about MySQL injection)
    $username = stripslashes($username);
    $password = stripslashes($password);
    // $username = mysqli_real_escape_string($username);
    // $password = mysqli_real_escape_string($password);

    echo $username;
    echo $password;
    $sql="SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result=mysqli_query($conn, $sql);

    // if (mysqli_num_rows($result) > 0) {
    //     while($row = mysqli_fetch_assoc($result)) {
    //        echo "Name: " . $row["name"]. "<br>";
    //     }
    //  } else {
    //     echo "0 results";
    //  }
    //  mysqli_close($conn);

    if (mysqli_num_rows($result) == 1) {
        session_start();
         $_SESSION['loggedin'] = true;
         $_SESSION['username'] = $username;
         $_SESSION['message'] = 'Welcome!';
     } else {
         $_SESSION['message'] = 'Wrong Username or Password';
     }
     mysqli_close($conn);
     header('location: ./../login.php');


    // Mysql_num_row is counting table row
    // $count=mysqli_num_rows($result);

    // // If result matched $username and $password, table row must be 1 row
    // if($count==1){
    //     session_start();
    //     $_SESSION['loggedin'] = true;
    //     $_SESSION['username'] = $username;
    //     $_SESSION['message'] = 'Welcome!';
    // } else {
    //     $_SESSION['message'] = 'Wrong Username or Password';
    // }
    // header('location: ./../login.php');
}

?>