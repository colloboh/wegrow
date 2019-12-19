<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="wegrow.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="wegrow.js"></script>
    <title>WeGrow</title>
</head>
<body>
   <header>
     <?php
        if (isset($_SESSION['userid'])){ 
          echo "<div class ='navi'>";
          echo '<form action ="logout.php" method="post">
          <button type="submit" name= "logout-submit" class="loginbutton">LOGOUT</a>
          </form>';
          echo "</div>";
           }
           
           else {
            echo "<div class ='navi'>";
            echo '<form action ="login.php" method="post">
            <button type="submit" name= "login-submit" class="loginbutton">LOGIN</a>
            </form>';
            echo "</div>";
           }
       ?>

       <div id="myHeader">
          <a href="index.php">
        <img src="logo.png" alt="We Grow logo" class="logo">
          </a>
      </div>
      <?php
        if (isset($_SESSION['userid'])){ 
          echo "<div class ='navi'>";
          echo '<form action ="post.php" method="post">
          <button type="submit" name= "logout-submit" class="loginbutton">SELL</a>
          </form>';
          echo "</div>";
           }
           else {
            echo '<a href="signup.php" class="signupbutton">SIGNUP</a>';
           }
       ?>      

       
   </header>
   <nav>
      <div id="burger" class="burger">
       <div></div>
       <div></div>
       <div></div>
     </div>
<?php
     if (isset($_SESSION['userid'])){ 
      echo "<li><a href='account.php'>ACCOUNT</a></li>";
           }
           else {
            echo "<li><a href='signup.php'>ACCOUNT</a></li>";
           }
       ?>      

     <li><a href="settings.php">SETTINGS</a></li>
     <li><a href="about.php">ABOUT</a></li>
     <li><a href="contact.php">CONTACT</a></li>

    
    </nav>
    </br>
    

   <div class="main">
     <form method="post" action="search.php" class="search" >
        <input type="text" placeholder="Search fresh produce near me..." name= "query">
        <button type="submit" name="find_food"><i class="fa fa-search"></i></button>
          </form>
    </div>
