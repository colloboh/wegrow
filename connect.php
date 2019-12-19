<?php
include_once 'dbh.php';
if (isset($_POST['signup-submit'])){


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$cardnum = $_POST['cardnum'];
$cvv = $_POST['cvv'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$card = $_POST['card'];

$sql = "INSERT INTO user (firstname, lastname, street, city, state,
cardnum, cvv, username, password, email, card)
VALUES ('$firstname', '$lastname', '$street', '$city', '$state', 
    '$cardnum', '$cvv', '$username', '$password', '$email', '$card')";
 mysqli_query($conn, $sql);

$sql = "SELECT * FROM user WHERE username= '$username' AND firstname='$firstname'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)) {
        $userid = $row['id'];
        $sql = "INSERT INTO profileimg (userid, status)
        VALUES ('$userid', 1)";
        mysqli_query($conn, $sql);
        header("Location: login.php");
    }
} else {
    echo "you have an error!";
}}
