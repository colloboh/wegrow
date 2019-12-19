<?php

if(isset($_POST['login-submit'])){

$username = $_POST['username'];
$password = $_POST['password'];


//connect to server & db
$conn = new mysqli('localhost', 'root', '', 'wegrow');

//prevent sql injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);


//query the db for user


$result = mysqli_query($conn, "select * from user where username = '$username' and password = '$password'")
    or die("failed to query database " .mysql_error());

$row = mysqli_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password ) {
    session_start();
    $_SESSION['userid'] = $row['id'];

   header('location: account.php?login=success');
 
   exit;
}
else {
    echo "login fail!";
    exit();
}
}

?>