<?php 
session_start();
$uid=$_SESSION["ID"];
$pass=$_SESSION["password"];
$fname = $uname =$email=$phoneNumber= $password= "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once "../model/usersModel.php";
    if(isset($_POST["Name"]))
    {
        $fname = test_input($_POST["Name"]);
        updateName($uid,$fname);
        header("Refresh: 0; url=../view/users/editProfile.php");
    echo $fname;
    }
    if(isset($_POST["userName"])){
        $uname = test_input($_POST["userName"]);
        updateUserName($uid,$uname);
        header("Refresh: 0; url=../view/users/editProfile.php");
    }
    if(isset($_POST["email"])){
        $email = test_input($_POST["email"]);
        updateEmail($uid,$email);
        header("Refresh: 0; url=../view/users/editProfile.php");
    }
    if(isset($_POST["phone"])){
        if(strlen($_POST["phone"])==11){
            $phoneNumber = test_input($_POST["phone"]);
            updatePhone($uid,$phoneNumber);
            header("Refresh: 0; url=../view/users/editProfile.php");
        }
        else{
            $phoneNumbererr="Valid phone number required";
        }
    }
    if(isset($_POST["currentPassword"])){
        if($_POST["currentPassword"]==$pass)
        {
            if($_POST["password"]==$_POST["repassword"])
            {
                $password = test_input($_POST["password"]);
                echo $password ;
                updatepassword($uid,$password);
                header("Refresh: 0; url=../view/users/editProfile.php");
            }
        }
    }
    if(isset($_POST["dp"]))
    {
        if($_POST["dp"]==$pass)
        {
            delete($uid);
            session_destroy();
        }
    }
    if(isset($_POST["adp"])&&$_POST["cid"])
    {
        if($_POST["adp"]==$pass)
        {
            delete($_POST["cid"]);
            header("Refresh: 0; url=../view/admin/customer.php");
        }
    }
    
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}