<?php
  require "header.php";
?>
   
<div class="creataccount">
  <h1>Welcome Back!</h1>

  <form method="POST" action="phplogin.php" name="test">
     
         
      <fieldset>
              <legend id="title">Login</legend>
              <label>Username:</label><input required="required" type="text" name="username"/> 
              <br/>
      </br>
              <label>Password:</label><input required="required" type="password" name="password"/>
              <br/> 

      </fieldset>
      <div class="buttonholder">
          <input type="submit" name="login-submit" value="Login">
        </div>
        
        </form>

  </form>
</div>

</body>

</html>