<?php
include_once 'dbh.php';
session_start();

if (isset($_POST['message-submit'])){


$subject = $_POST['subject'];
$content = $_POST['content'];
$recipient_id = $_POST['reciever_id'];
$sender_id = $_SESSION['userid'];


$sql = "INSERT INTO message (sender_id, recipient_id, subject, content)
VALUES ($sender_id, '$recipient_id', '$subject', '$content')";
$result = mysqli_query($conn, $sql);
header('location: index.php');
} else {
    echo "you have an error!";
}


