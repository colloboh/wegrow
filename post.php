<?php
  require "header.php";
?>
   
<br>
<br>

<div class="post">
<form action="upload.php" method="POST"enctype="multipart/form-data" >
<input type="file" name="file">
<br>
<label>Name:</label><input required="required" type="text" name="produceName"/> 
 <br/>
</br>
 <label>Price:</label><input required="required" type="text" name="price"/>
<br/> 
<label>Quantity:</label><input required="required" type="text" name="quantity"/>
<br/> 
<label>Description:</label><input required="required" type="text" name="description"/>
<br/> 
<button type="submit" name="submitproduce">UPLOAD PRODUCE</button>
</form>


</div>

</body>

</html>