<?php
  require "header.php";


  $sender_id = $_SESSION['userid'];

  $conn = mysqli_connect("localhost", "root", "", "wegrow");
  $sql = "SELECT * FROM user, message WHERE user.id = recipient_id AND  recipient_id=$sender_id";
$result = mysqli_query($conn, $sql);
echo"<br>";
echo"<br>";
echo "<div class='searchresult'>";
while ($row = mysqli_fetch_assoc($result)) {
       echo "<div class='section'>";
       echo "<h3 id='p_desc'>Author: </h3>";
       echo "<p>".$row['firstname']." ".$row['lastname']." </P>";
       
        echo "<h3 id='p_desc'>Subject: </h3>";
        echo "<p>".$row['subject']." </P>"; 
        echo "<h3 id='p_desc'>Content: </h3>";
        echo "<p>".$row['content']." </P>";              
        echo "</div>";
         
}
echo "</div>";



