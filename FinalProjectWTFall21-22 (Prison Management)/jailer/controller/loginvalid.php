<?php
  
  if (!empty($_POST['remember'])) {
    setcookie("username", $_POST['username'], time()+10);
    setcookie("pwd", $_POST['pwd'], time()+10);
    
  }
  else{
    setcookie("username", "");
    setcookie("pwd", "");
  }
   
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];


    require_once '../connect.php';
    require_once '../model.php';

    if (emptyInputLogin($username, $pwd) !== false) {
       header("location:../Login.php?error=emptyinput");
       exit();
     }

    

    loginUser($conn, $username, $pwd);

  }
  else{
    header("location:../Login.php");
    exit();
  }
