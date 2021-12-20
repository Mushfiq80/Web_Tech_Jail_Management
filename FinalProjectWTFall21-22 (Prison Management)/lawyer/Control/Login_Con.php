<?php

   if(!empty($_POST['remember'])){
      setcookie("uname", $_POST['username'], time()+10);
      setcookie("pass", $_POST['password'], time()+10);
      header("location:Lawyerdash.php");
      
   }else{
    setcookie("uname", "");
    setcookie("pass", "");
    header("location:Lawyerdash.php");
   }

   

?>