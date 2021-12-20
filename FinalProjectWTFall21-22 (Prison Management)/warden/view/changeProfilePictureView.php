
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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


  </head>
  <body style="background-color:brown">

    <ul>
      <li style="float:left"><a href="../homepage.php">FRSP</a></li>
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

<div class="w3-container w3-dark-grey" style="margin-top:150px">



         <script>
         $(document).ready(function(){
              $('#insert').click(function(){
                   var image_name = $('#image').val();
                   if(image_name == '')
                   {
                        alert("Please Select Image");
                        return false;
                   }
                   else
                   {
                        var extension = $('#image').val().split('.').pop().toLowerCase();
                        if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                        {
                             alert('Invalid Image File');
                             $('#image').val('');
                             return false;
                        }
                   }
              });
         });
         </script>
    <link rel="stylesheet" href="../css/viewProfileWarden.css">
       </head>
       <body>
            <br /><br />
            <div class="container" >
            <form action="page2/picValidation.php" method="post" enctype="multipart/form-data">
                <!--after clicking submit btn this page will be loaded..-->

                <fieldset>
                    <legend><B>PROFILE PICTURE</B></legend> <br>
                    <!--fieldset is just to make a separate sectin and legend for naming this fieldset. div is for separate that img for editing..-->
                    <div class="upPic">
                        <img src="page2/icon.png"><br><br>
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                    <br>
                    <hr>
                    <input type="submit" name="submit">
                </fieldset>
            </form>

        </div>

    </div>
                 </form>
                 <br />
                 <br />

            </div>
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