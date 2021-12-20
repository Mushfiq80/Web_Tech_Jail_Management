
<?php



session_start();
require_once '../controller/wardenInfoC.php';
$data = fetch($_SESSION['username']);
if($data!=NULL)
{
  foreach ($data as $i => $warden):

       $name= $warden['Name'] ;
       $email=$warden['Email'];
       $designation=$warden['Designation'];

  endforeach;

}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
    <li style="float:left"><a href="../homepage.php"> FRSP</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#contact">Contact</a></li>
   <li><a href="../homepage.php">Home</a></li>
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

 <div class="w3-container w3-dark-white" style="margin-top:0px">
   <form  class="loginbox" onsubmit="return validation()"action="../controller/updateWardenC.php" method="POST" enctype="multipart/form-data">

   <br><br>
  <h2>Edit Profile</h2>
   <br><br><br>
   <div class='center'>
    <label for="name">Name:</label><br><br>
    <input value="<?php echo $name ?>" type="text" id="name" name="name" onkeyup="checkName()" onblur="checkName()">
    <span class="error" id="nameErr">* <?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span> <br><br>
    <label for="email">Email:</label><br><br>
    <input value="<?php echo $email ?>" type="text" id="email" name="email" onkeyup="checkEmail()" onblur="checkEmail()">
    <span class="error" id="emailErr">* <?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];} ?></span><br><br>
    <label for="email">designation:</label><br><br>
    <input value="<?php echo $designation ?>" type="text" id="designation" name="designation" onkeyup="checkdesignation()" onblur="checkdesignation()">
    <span class="error" id="designationErr">* <?php if(!empty($_GET['designationErr'])){echo $_GET['designationErr'];} ?></span>
    <br><br><br>
    <input type="submit" name = "update" value="Update">
</div>
  </form>

 </div>



 </div>









</body>
</html>

<?php
require_once "../javascript/editProfile.php";
?>