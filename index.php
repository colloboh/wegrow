<?php
  require "header.php";
?>
     <div class="slogan">
       <h1>FROM YOUR NEIGHBORS TO YOU!</h1>
     </div>
    
     <img src="main pic.png" alt="Farmer with fresh produce" class="mainpic">
   
   <br>

   <div class="section1">
     <h3>Newly listed Produce...</h3>
     <div class="items">

     <?php
         $conn = mysqli_connect("localhost", "root", "", "wegrow");
         $sql = "SELECT * FROM produce";
       $result = mysqli_query($conn, $sql);
       echo "<div class='searchresult'>";
       while ($row = mysqli_fetch_assoc($result)) {
       
        echo "<a href ='details.php?id={$row['produce_id']}'>";
       
              echo "<div class='section'>";
               echo "<div class='produceicon'>";
               echo "<img src='produce/".$row['image']." ' id='userimage'>";
               echo "</div>";
               echo "<h3 id='p_desc'>$".$row['price']."  ".$row['name']."</h3>";                
               echo "</div>";
           
           echo "</a>";
       }
       echo "</div>";
     ?>
   <br>
   </div>

</body>

</html>