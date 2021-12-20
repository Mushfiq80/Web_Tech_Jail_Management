
<?php

require_once '../model/model.php';





if (isset($_POST['submit'])) 
{

  $name = $email = $username = $position = $address = "";
  $nameErr = $emailErr = $usernameErr = $positionErr = $addressErr = "";
 $flag=1;
 function test_input($data) 
 {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }

 if ($_SERVER["REQUEST_METHOD"] == "POST") 
 {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $flag=0;
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-.' ]*$/",$name)) 
    {
      $nameErr = "Only letters white space, period & dash allowed";
      $name ="";
      $flag=0;
    }
    else if (strlen($name)<2)
     {
      $nameErr = "At least two words needed";
      $name ="";
      $flag=0;
    }
  }

  if (empty($_POST["email"])) {
    echo "Email is required";
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email format";
      $flag=0;
    }
  }



    if (empty($_POST["username"])) 
    {
      echo "User Name is required";
      $flag=0;
    }
    else {
     $username = test_input($_POST["username"]);

      if (!preg_match("/^[a-zA-Z-. ]*$/",$username)) {
         echo "Only letters and white space allowed";
         $flag=0;
       }
       else {
         if(strlen($username)<2)
         {
            echo "Name must contains at least two character ";
            $flag=0;
         }

       }
    }
    if (empty($_POST["position"])) 
    {
      echo "Position is required";
      $flag=0;
    }
    else {
     $position = test_input($_POST["position"]);

      if (!preg_match("/^[a-zA-Z-. ]*$/",$position)) {
         echo "Only letters and white space allowed";
         $flag=0;
       }
    }
    if (empty($_POST["address"])) 
    {
      echo "Address is required";
      $flag=0;
    }
    else {
     $address = test_input($_POST["address"]);

      if (!preg_match("/^[a-zA-Z-. ]*$/",$address)) {
         echo "Only letters and white space allowed";
         $flag=0;
       }
    }

  }
}
if($flag==1)
{
  $data['name']=$name;
  $data['email']=$email;
  $data['username']=$username;
  $data['position']=$position;
  $data['address']=$address;
  if(isset($_POST["submit"]))  
    {
 	if(file_exists('addedJailer.json'))
 		{
 			$current_data = file_get_contents('addedJailer.json');  
            $array_data = json_decode($current_data, true);  
            $extra = array
            (  
                 'name'               =>     $_POST["name"],
                 'email'               =>     $_POST["email"],
                 'username'               =>     $_POST["username"],
                 'position'               =>     $_POST["position"],
                 'address'               =>     $_POST["address"],
                 
                );  
            $array_data[] = $extra;  
            $final_data = json_encode($array_data);
            if(file_put_contents('addedJailer.json', $final_data))  
            {  
                 $message = "<label>Data Recorded Successfully</p>";  
            }  
        }  
        else  
        {  
           $error = 'JSON File not exits';  
        }  
    }
  
  if (addJailerInfo($data)) 
  {
    header('location:../view/successMessage.php');
  }
  

  else {
    echo 'Could not add!!';
  }
}


else 
{
  echo "You can not access this page!!";
}






?>