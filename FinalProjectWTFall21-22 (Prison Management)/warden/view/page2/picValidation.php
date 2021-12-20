
<?php
session_start();

if(isset($_SESSION['username']))
{

  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <style>
    .photo img {
        height: 300px;
    }

    .photo {
        width: 200px;
    }
    </style>

  </head>
  <body style="background-color:brown">

    <ul>
      <li style="float:left"><a href="../homepage.php">FRSP</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact</a></li>
     <li><a href="../homepage.php">Home</a></li>
    </ul>

    <div class="w3-sidebar w3-bar-block w3-grey" style="width:25%">
   <a href="../dashboardWardenView.php" class="w3-bar-item w3-button w3-hover-amazon">Dashboard</a><br>
  <a href="../prisonerInfo.php" class="w3-bar-item w3-button w3-hover-amazon">Prisoners Information</a><br>
  <a href="../lawyerInfo.php" class="w3-bar-item w3-button w3-hover-amazon">Lawyers Information</a><br>
  <a href="../jailerInfo.php" class="w3-bar-item w3-button w3-hover-amazon">Jailers Information</a><br>
  <a href="../SearchWarden.php" class="w3-bar-item w3-button w3-hover-amazon">Search Warden</a><br>
  <a href="../viewProfileWardenView.php" class="w3-bar-item w3-button w3-hover-amazon">View Profile</a><br>
  <a href="../editProfile.php" class="w3-bar-item w3-button w3-hover-amazon">Edit Profile</a><br>
  <a href="../changeProfilePictureView.php" class="w3-bar-item w3-button w3-hover-amazon">Change Profile Picture</a><br>
  <a href="../changePasswordWardenView.php" class="w3-bar-item w3-button w3-hover-amazon">Change Password</a><br>
  <a href="../logout.php" class="w3-bar-item w3-button w3-hover-amazon">Logout</a><br>
</div>


<div style="margin-left:25%">

<div class="w3-container w3-dark-grey" style="margin-top:150px">
<?php
$target_dir = "pic/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$flag = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) 
{
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    $flag  = 1;
}
   else 
  {
    echo "File is not an image<br>";
    $flag = 0;
  }
if ($_FILES["fileToUpload"]["size"] > 4000000) 
{
  echo "Picture size should not be more than 4MB<br>";
  $flag  = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")
{ 
  echo "Sorry, only JPG, JPEG, & PNG files are allowed<br>";
  $flag  = 0;
}

if ($flag  == 0) 
{
  echo "Sorry, your file was not uploaded<br>"; 
} 
else 
{
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
  {
    echo "Profile Picture Uploaded Succesfully<br>";
  } else 
  {
    echo "Sorry, there was a problem uploading your file<br>";
  }
}
}
else {
  header("location:../view/loginWardenView.php");
  }
?>
    <div class="photo">
        <fieldset>
            <legend><B>PROFILE PICTURE</B></legend> <br>
            <br><img src="pic/<?php echo($_FILES["fileToUpload"]["name"]) ?>" alt="Profile Picture">
        </fieldset>

    </div>

</body>

</html>