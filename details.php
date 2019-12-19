<?php
  require "header.php";
  require "dbh.php";
  $id = mysqli_real_escape_string($conn, $_GET['id']);


    $sql = "SELECT * FROM user, produce WHERE user.id = produce.userid AND produce_id='$id' "; 
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

  echo "<br>";  
  echo "<br>";  

  echo "<div class='item_image'>";
  
  echo "<img src='produce/".$row['image']." ' id='desc_img'>";
   
  echo "<h2 id='p_desc'>$".$row['price']."  ".$row['name']."</h2>";  
  echo "</div>";

  echo "<h3 id='p_desc'>".$row['city'].",  ".$row['state']."</h3>";    

  echo "<h1 id='p_desc'>Seller Details </h1>";






  echo "<div class='mega'>";
echo "<div class='bio'>";

echo "<div class='topleft'>";
echo "<h2 id='name'>".$row['firstname']." ".$row['lastname']."</h2>";
echo "<div id='usericon2'>";
$id = $row['id'];
echo "<img src='uploads/profile".$id.".jpg' id='userimage'>";
echo "</div>";
echo "</div>";

echo "<div class='descript'>";
echo "<p id='itmdes'>Item Description:</p>";  
echo "<p id='name'>".$row['description']."</p>";    
echo "</div>";
echo "</div>";

?>



<div class="container">
  <form method="post" action="sendmessage.php" name="message">

    <label for="subject">Subject</label>
    <input type="text" id="subject" name="subject" placeholder="How may i help you...">
</br>

    <label for="content">Content</label>
    <textarea id="subject" name="content" placeholder="Write something.." style="height:200px"></textarea>
    
    <input type="hidden" name="reciever_id" value="<?php echo $id?>">

    <input type="submit" name="message-submit" value="Send Message">

  </form>
</div>

</div>


  
  


