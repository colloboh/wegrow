<?php
session_start();
include_once 'dbh.php';
$id =  $_SESSION['userid'];

if(isset($_POST['iconsubmit'])){
    $file = $_FILES['file'];

    $fileName= $_FILES['file']['name'];
    $fileTmpName= $_FILES['file']['tmp_name'];
    $fileSize= $_FILES['file']['size'];
    $fileerror= $_FILES['file']['error'];
    $fileType= $_FILES['file']['type'];


    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)) {
        if($fileerror === 0) {
            if ($fileSize < 1000000) {
                $fileNameNew = "profile".$id.".".$fileActualExt;
                $fileDestination = 'uploads/' .$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $sql = "UPDATE profileimg SET status=0 WHERE userid='$id';";
                $result = mysqli_query($conn, $sql);

                header("Location: account.php?uploadsuccess");
            } else{
                echo "Your file is too big!";
            }
        }else {
                echo "There was an error uploading your file!";
        }
    }else {
        echo "You cannot upload files of this type!";
    }
}

