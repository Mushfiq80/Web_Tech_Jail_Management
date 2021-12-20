<!DOCTYPE HTML>
<?php 
 ?>
<html>
<head>
<link rel="stylesheet" href="../css/signup.css">
</head>
<body>
<form class="loginbox" onclick="return validation()" method="post" action="../controller/addJailerC.php">
  <h2>Add Jailer</h2>

  <p>Name:</p> <input type="text" onkeypress="checkName()" onblur="checkName()" name="name" id="name" placeholder="Enter Name">
  <br><br>
  <span class="error" id="nameErr">* <?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span>
  <br>
   <p>E-mail:</p> <input type="text" onkeypress="checkEmail()" onblur="checkEmail()" name="email" id="email" placeholder="Enter Email">
  <br><br>
  <span class="error" id="emailErr">* <?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];} ?></span>
  <br>
  <p>Username:</p> <input type="text" onkeypress="checkUsername()" onblur="checkUsername()" name="username" id="username" placeholder="Enter position">
  <br><br>
  <span class="error" id="usernameErr">* <?php if(!empty($_GET['usernameErr'])){echo $_GET['usernameErr'];} ?></span>
  <br>
  <p>Position:</p> <input type="text"  onkeydown="checkPassword()" onblur="checkPassword()" name="position" id="position" placeholder="Enter Position" >
  <br><br>
  <span class="error" id="positionErr">* <?php if(!empty($_GET['positionErr'])){echo $_GET['positionErr'];} ?></span>
  <br>

  <p>Address:</p> <input type="text" onkeypress="checkConfirmPassword()" onblur="checkConfirmPassword()" name="address" id="address" placeholder="Enter address">
  <br><br>
  <span class="error" id="addressErr">* <?php if(!empty($_GET['addressErr'])){echo $_GET['addressErr'];} ?></span>
  <br>
  <input type="submit" name="submit" value="Submit">
</form>
<br>
</body>
</html>