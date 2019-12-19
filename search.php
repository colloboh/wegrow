<?php
  require "header.php";

  $query = $_POST['query'];

  $conn = mysqli_connect("localhost", "root", "", "wegrow");
  $sql = "SELECT * FROM produce WHERE name LIKE '%".$query."%'";
$result = mysqli_query($conn, $sql);
echo"<br>";
echo"<br>";
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
