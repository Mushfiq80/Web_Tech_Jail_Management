<?php

session_start();
$conn = mysqli_connect('localhost', 'root', '' , 'warden_db') or die ('Unable to connect');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ max-width: 300px;margin: auto;position: center; padding: 20px; text-align: center; }

        .title {
  color: red;
  font-size: 18px;
}
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Lawyer Login</h2>
        <p>Please fill in your credentials to login.</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

           <form name="loginform" onsubmit="return validation()" action="validation.php"  method="post">
          
            <div class="form-group">
                <label>Username</label>
                <input type="text" onkeydown="checkUsername()" onblur="checkUsername ()" placeholder="Enter Username" name="username" id="username">
                <span class="error" id="nameErr">* <?php if(!empty($_GET['usernameErr'])){echo $_GET['usernameErr'];} ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" onkeydown="checkPassword()" onblur="checkPassword()" placeholder="Enter Password" name="password" id="password">
                <span class="error" id="passwordErr">* <?php if(!empty($_GET['passwordErr'])){echo $_GET['passwordErr'];} ?></span>
            </div>
            <input id="remember" type="checkbox" name="remember"  <?php if(isset($_COOKIE['uname'])) {echo "checked";} ?>> 
            <label for="remember">Remember me</label>  
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <br>
            <div class="title">
            <span><?php
                if(isset($msg)){
                    echo $msg;
                }
            ?></span>
            </div>
            <p>Don't have an account?</p>
        </form>
    </div>
    <?php
    if (isset($_POST['login'])){
        $Username = $_POST['Username'];
        $Pass = $_POST['Pass'];

    $select = mysqli_query($conn," SELECT * FROM lawyer WHERE Username = '$Username' AND Pass = '$Pass' ");
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