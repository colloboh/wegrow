<?php
session_start();

if(isset($_POST['submitproduce'])){
    $file = $_FILES['file'];

    $fileName= $_FILES['file']['name'];
    $fileTmpName= $_FILES['file']['tmp_name'];
    $fileSize= $_FILES['file']['size'];
    $fileerror= $_FILES['file']['error'];
    $fileType= $_FILES['file']['type'];

    $produceName = $_POST['produceName'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
   
    

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)) {
        if($fileerror === 0) {
            if ($fileSize < 1000000) {
                $fileNameNew = uniqid('', true). ".".$fileActualExt;
                $fileDestination = 'produce/' .$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);



    //db connection
    $conn = new mysqli('localhost', 'root', '', 'wegrow');
    if($conn->connect_error){
        die('Connection failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into produce(name, price, quantity, description, image, userid, time)
        values(?,?,?,?,?,?,?)"); 
        $stmt->bind_param("siissii",$produceName, $price, $quantity, $description, $fileNameNew, $_SESSION['userid'], time());
        $stmt->execute() or die(mysqli_error($conn));
        header('location: account.php');
        $stmt->close();
        $conn->close();  
    }
} else {
    echo "File not allowed!";
}


            } 
                else {
                    echo "File too big!";
                }
            }
            else {
                echo "Error uploading size";
            }  
        }

   



 

?>
