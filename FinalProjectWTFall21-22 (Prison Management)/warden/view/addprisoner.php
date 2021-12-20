<?php
include "../model/db_config.php";

$studentId="";
$uname="";
$password="";
$sname="";
$fname="";
$mname="";
$dob="";
$gender="";
$contactno="";
$address="";
$cgpa="";
$batch="";
$err_uname="";
$err_sname="";
$err_password="";
$err_contactno="";
$err_gender="";
$err_cgpa="";
$err_batch="";
$hasError=false;
$dept_name="";



if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $studentId=$_POST["studentId"];
    $uname=$_POST["uname"];
    $password=$_POST["password"];
    $sname=$_POST["sname"];
    $fname=$_POST["fname"];
    $mname=$_POST["mname"];
    $gender=$_POST["gender"];
    $dob=$_POST["dob"];
    
    $contactno=$_POST["contactno"];
    $address=$_POST["address"];
    $cgpa=$_POST["cgpa"];
    $batch=$_POST["batch"];
    $dept_name=$_POST["dept_name"];
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //if(isset($_POST["submit"])){
            //for user

            if(empty($_POST["uname"])){
                $err_uname="*Username Required";
                $hasError=true;
            }
            else if(strlen($_POST["uname"]) < 6){
                $err_uname="*Username should be at least 6 characters";
                $hasError=true;
            }
            else
            {
                $uname=htmlspecialchars($_POST["uname"]);
                $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
                $query="insert into students values('$studentId','$uname','$password','$sname','$fname','$mname','$dob','$gender','$contactno','$address','$cgpa','$batch','$dept_name')";
                if (mysqli_query($conn,$query))
                {
                echo "inserted!";
                }
                else
                {
                echo mysqli_error($conn);

                }
            }
            if (is_numeric($contactno)) 
            {
                if(strlen($_POST["contactno"]) < 11)
                {
                    $err_contactno="* should be at least 11 number";
                    $hasError=true;
                }
            }
             else 
            {
                $err_contactno="*Enter only numbers";
                $hasError=true;
            }

        //for batch!
        if (is_numeric($batch)) 
        {
            $batch=$_POST["batch"];
        }
         else 
        {
            $err_batch="Enter accurate year";
            $hasError=true;
        }
        //for cgpa
        if (is_float((float)($cgpa))) 
        {

            $cgpa=$_POST["cgpa"];
        }
         else 
        {
            $err_cgpa="*Enter float number";
            $hasError=true;
        }
            
            if(empty($_POST["sname"]) || empty($_POST["fname"]) || empty($_POST["mname"]) || empty($_POST["address"])){
                $err_sname= "* Information Required";
                $hasError=true;
            }else{
                $sname=$_POST["sname"];
                $fname=$_POST["fname"];
                $mname=$_POST["mname"];
                $address=$_POST["address"];

            }
            //for password
            if(empty($_POST["password"])){
                $err_password = "*password Required";
                $hasError=true;
            }else{
                $password=$_POST["password"];
            }
            if(!$hasError){
                echo "New student added!";
                header("Location: student.php");
            }
            //for gender
            if (empty($_POST["gender"])) 
            {
                $err_gender = " *You have to select one";
              } else
               {
                $gender = $_POST["gender"];
              }
            }
        }
    
    

?> 
 

