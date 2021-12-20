

<link rel="stylesheet" href="../css/viewProfile.css">

<script type="text/javascript">



  function showDetails(str) {

    xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "../controller/getDetails.php?q="+str, true);
    xhttp.send();
}

</script>








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
      .center {
  margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;
} </style>
  </head>
  <body style="background-color:brown">

    <ul>
      <li style="float:left"><a href="../index.html"> FRSP</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact</a></li>
     <!-- <li><a href="#news">Registration</a></li> -->
     <li><a href="../index.html">Home</a></li>
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

<div class="w3-container w3-dark-white" style="margin:50px">


  <?php

  require_once '../controller/wardenInfoC.php';

  if(isset($_SESSION['username']))
  {
  $data = fetch($_SESSION['username']);


    if($data!=NULL)
    {
      foreach ($data as $i => $warden):

           $name= $warden['Name'] ;
           $email=$warden['Email'];
           $username= $warden['Username'];
           $birthday= $warden['Birthday'] ;
           $gender= $warden['Gender'] ;
           $designation= $warden['Designation'] ;
           $image=$warden['Image'];
      endforeach;

      echo "</div>";
     echo "<div class='center'>";
      echo ('
           <tr>
                <td>
                     <img src="data:image/jpeg;base64,'.base64_encode($image ).'"  class="img-thumnail" />
                </td>
           </tr>
      ');

      echo "<br /><br /><br /><p>Name: &nbsp; $name</p>";
      echo "<br /><p>Email: &nbsp;$email</p>";
      echo "<br /><p>Username: &nbsp;$username</p>";
      echo "<br /><p>Birth Date: &nbsp;$birthday</p>";
      echo "<br /><p>Gender: &nbsp;$gender</p>";
      echo "<br /><p>Designation: &nbsp;$designation</p>";
      echo "</div>";
      ?>
      <br>
      <div id="txtHint" ></div>
    </div>

       </div>
      <?php


    }
  }

  else {
    echo "You cannot access this page!!!!!!!!!!!!";
  }
   ?>

</div>



</div>



  </body>
</html>





<?php

}
else {
header("location:../view/loginWardenView.php");
}
 ?>