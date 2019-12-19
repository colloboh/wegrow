<?php
  require "header.php";
?>
   
<div class="creataccount">
  <h1>Create an Account</h1>

  <form method="post" action="connect.php" name="form">
      <fieldset>
          <legend id="title">Billing Address</legend>
          <label>Firstname:</label><input required="required" type="text" id="firstname" name="firstname"/> 
          <br/>
          <label>Lastname:</label><input required="required" type="text"  id="lastname" name="lastname"/> 
          <br/>
          <label>Street Address:</label><input required="required" type="text" id="street" name="street"/> 
          <br/>
          <label>City:</label><input required="required" type="text"  id="city" name="city"/> 
          <br/>
          <label>State (ex. "CA"):</label><input required="required" type="text"  id="state" name="state"/> 
          <br/>
         
                          
          <br/>
          <br/>
          <label>zipcode:</label><input required="required" type="number"/> 
          <br/>
      </fieldset>

      <fieldset>
              <legend id="title">Payment</legend>
          <input type="radio" name="card" value="visa">Visa
          <input type="radio" name="card" value="mastercard"> Master Card
          <input type="radio" name="card" value="discover"> Discover
          <input type="radio" name="card" value="americanexpress"> American Express  
          <br/>
          <label>Card #</label><input required="required" type="text"  id="cardnum" name="cardnum"/> 
          <br/>
          <label>Expiration</label>
          <select>
              <option>01</option>
              <option>02</option>
              <option>03</option>
              <option>04</option>
              <option>05</option>
              <option>06</option>
              <option>07</option>
              <option>08</option>
              <option>09</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
          </select>
          <select>
              <option>2018</option>
              <option>2019</option>
              <option>2020</option>
              <option>2021</option>
              <option>2022</option>
          </select>
          <br/>
          <label>CVV</label><input required="required" type="text"  id="cvv" name="cvv"/> 
          <br/>
      </fieldset>

      <fieldset>
              <legend id="title">Create Account</legend>
              <label>Username:</label><input required="required" type="text"  id="username" name="username"/> 
              <br/>
              <label>Password:</label><input required="required" type="password"  id="password" name="password"/>
              <br/> 
              <label>Password (verify):</label><input required="required" type="password"/> 
              <br/>
              <label>E-Mail:</label><input required="required" type="text"  id="email" name="email"/> 
              <br/>

      </fieldset>
        <div class="buttonholder">
          <input type="submit" name="signup-submit" value="Create Account">
        </div>

  </form>
</div>

</body>

</html>