<!DOCTYPE html>
<head>
    <title></title>
    <link rel="stylesheet" href="styles.css">
</head>
 <body>
    <div class="login-form">
      <h2>Sign in</h2>
      <form action= "controller/loginvalid.php" method="post">
      <input name="username" id ="username"class="input-feild" type="text" placeholder="Username" value="<?php
                if(isset($_COOKIE['username'])){
        echo $_COOKIE['username'];} ?>"/>
      <br/>
      <input name="pwd" id="password" class="input-feild" type="text" placeholder="Password"/>
      <br/><br>
      <input id="remember"type="checkbox" name="remember"><label for="remember">Remember me</label><br>
      <?php 
        if (isset($_GET['error'])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Username or Password is empty.</p>";
            }
            else if ($_GET['error'] == "wronglogin") {
                echo "<p>Incorrect login information</p>";
            }
        }

     ?>
      <button name="submit" type="submit"><span></span>Sign in</button>
        </form>
    </div>
    

    
 </body>
</html>

