<?php
  
  require "header.php";
  include_once 'dbh.php';

  $allowed = array('jpg', 'jpeg', 'png');
?>




    <br>
    <br>
  <div class="useraccount">

 <?php
$myid = $_SESSION['userid'];
    $sql = "SELECT * FROM user where id = $myid";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $sqlimage = "SELECT * from profileimg WHERE userid='$id' ";
        $resultImg = mysqli_query($conn, $sqlimage);
        while ($rowImg = mysqli_fetch_assoc($resultImg)) {
            echo "<div id='uploadicon'>";
            echo "<div id='usericon'>";
            if ($rowImg['status'] == 0) {
                echo "<img src='uploads/profile".$id.".jpg' id='userimage'>";
            } else {
                echo "<img src='uploads/default-image.jpg' id='userimage'>";
            }
            echo "</div>";


        if (isset($myid)){
            echo "<form action= 'uploadicon.php' method='post' enctype= 'multipart/form-data'>";   echo "<input type='file' name='file'>";
            echo "<button type='submit' name= 'iconsubmit'> UPLOAD </button>";
            echo "</form>";
        } else {
          echo "You are not logged in!";
        }

           echo "</div>";
           

           echo "<div class='bio'>";
           echo "<h3 id='name'>".$row['firstname']." ".$row['lastname']."</h3>";
           echo "<h1 id='name'>".$row['city'].", ".$row['state']."</h1>";
           
          

        }
      }
  } else {
      echo "There is no users yet!";   
    }


?>
    
    
    <form method="post" action="sendmessage.php" name="message" >
<input type="button" name="check-msg" onclick="window.location.href = 'readmessage.php';"
value="Check Messages" class="chkmsg">
</form>
   
<form method="post" action="sendmessage.php" name="message" >
<input type="button"  name="check-msg"  onclick="window.location.href = 'post.php';"
value="Post Produce" class="chkmsg">
</form>
   


  </div>

  <div class="sellinginfo">
    <h2 class="leftside">SELLING</h2>
    <h5 class="leftside">LAST 12 MONTHS</h5>
    <h5 class="leftside">LAST 30 DAYS</h5>
  </div>

  <div class="sellinginfo">
    <h2 class="leftside">BUYING</h2>
    <h5 class="leftside">LAST 12 MONTHS</h5>
    <h5 class="leftside">LAST 30 DAYS</h5>
  </div>
  
  <br>

  </div>

</div>

</body>

</html>