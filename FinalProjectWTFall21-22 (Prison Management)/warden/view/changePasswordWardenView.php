
<!DOCTYPE html>
<?php
require_once "../javascript/changePassword.php";
?>




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
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
    h2 {
  text-align: center;
}
      .center {
  margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;
} </style>

  </head>
  <body style="background-color:brown">

    <ul>
       <li style="float:left"><a href="../../index.html"> FRSP</a></li>
       <li><a href="#about">About</a></li>
       <li><a href="#contact">Contact</a></li>
      <li><a href="dashboardWardenView.php">Home</a></li>
    </ul>

    <div class="w3-sidebar w3-bar-block w3-grey" style="width:25%">
   <a href="dashboardWardenView.php" class="w3-bar-item w3-button w3-hover-amazon">Dashboard</a><br>
  <a href="prisonerInfo.php" class="w3-bar-item w3-button w3-hover-amazon">Prisoners Information</a><br>
  <a href="lawyerInfo.php" class="w3-bar-item w3-button w3-hover-amazon">Lawyers Information</a><br>
  <a href="jailerInfo.php" class="w3-bar-item w3-button w3-hover-amazon">Jailers Information</a><br>
  <a href="SearchWarden.php" class="w3-bar-item w3-button w3-hover-amazon">Search Warden</a><br>
  <a href="activity.php" class="w3-bar-item w3-button w3-hover-amazon">Activities</a><br>
  <a href="viewProfileWardenView.php" class="w3-bar-item w3-button w3-hover-amazon">View Profile</a><br>
  <a href="editProfile.php" class="w3-bar-item w3-button w3-hover-amazon">Edit Profile</a><br>
  <a href="changeProfilePictureView.php" class="w3-bar-item w3-button w3-hover-amazon">Change Profile Picture</a><br>
  <a href="changePasswordWardenView.php" class="w3-bar-item w3-button w3-hover-amazon">Change Password</a><br>
  <a href="logout.php" class="w3-bar-item w3-button w3-hover-amazon">Logout</a><br>
</div>
<div style="margin-left:25%">

<div class="w3-container w3-dark-white" style="margin-top:50px">
  <form class="loginbox" onclick="return validation()" method="post" action="../controller/changePasswordWardenC.php">
    <br>
      <h2>Change Password</h2>
      <br><br /><br><br />
      <div class="center">
      Current Password: <br><input type="text" name="cpassword" id="cpassword" onkeyup="checkCurrentpassword()" onblur="checkCurrentpassword()">

      <span class="error" id="currentPasswordErr">* <?php if(!empty($_GET['currentPasswordErr'])){echo $_GET['currentPasswordErr'];} ?></span>
      <br><br>
      <span style="color:blue">New Password:</span><br>
      <input type="text" name="npassword" id="npassword" onkeyup="checkNewpassword()" onblur="checkNewpassword()" >
      <span class="error" id="newPasswordErr">* <?php if(!empty($_GET['newPasswordErr'])){echo $_GET['newPasswordErr'];} ?></span>

      <br><br>
      <span style="color:green">Retype New Password:</span><br>
      <input type="text" name="rnpassword" id="rnpassword" onkeyup="checkRetypepassword()" onblur="checkRetypepassword()">
      <span class="error" id="retypePasswordErr">* <?php if(!empty($_GET['retypePasswordErr'])){echo $_GET['retypePasswordErr'];} ?></span>

      <br><br><br><br>
      <input type="submit" name="submit" value="update">
      <br><br>
</div>


  </form>
</div>
</div>
  </body>
</html>
<?php
}
else {
header("location:../view/login.php");
}
 ?>