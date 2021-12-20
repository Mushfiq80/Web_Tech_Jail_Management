<?php

session_start();
$conn = mysqli_connect('localhost', 'root', '' , 'warden_db') or die ('Unable to connect');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            text-align: center;
        }

        .field{
            margin-bottom: 20px;
        }
        body {
  background-image: url('prison.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
} 
text{
    
    text-shadow: 2px 2px #ff0000
} 
h2 {
  text-shadow: 2px 2px #FF0000;
}
    </style>
</head>
<body>
<img src="logo.png" alt="David" style="width:300px">
    <h2>Lawyer Login</h2>
    <div>
    
        <form action = "index.php" method = "post">
            <input type = "text" class = "field" name = "Username" placeholder = "Username" required = ""><br/>
            <input type = "password" class = "field" name = "Pass" placeholder = "Password" required = ""><br/>
            <input id="remember" type="checkbox" name="remember"  <?php if(isset($_COOKIE['uname'])) {echo "checked";} ?>> 
            <label for="remember">Remember me</label> <br>
            <input type = "submit" class = "field" name = "login" value = "Login"><br>
            <a href="../index.html">index</a>
        </form>
    </div>

<?php
    if (isset($_POST['login'])){
        $Username = $_POST['Username'];
        $Pass = $_POST['Pass'];

    $select = mysqli_query($conn," SELECT * FROM law WHERE Username = '$Username' AND Pass = '$Pass' ");
    $row  = mysqli_fetch_array($select);

    if(is_array($row)) {
        $_SESSION["Username"] = $row['Username'];
        $_SESSION["Pass"] = $row['Pass'];
    }   else {
        echo '<script type = "text/javascript">';
        echo 'alert("Invalid Username or Password!");';
        echo 'window.location.href = "index.php" ';
        echo '</script>';
    }
    }
    if(isset($_SESSION["Username"])){
        header("Location:Lawyerdash.php");
    }
?>

</body>
</html>