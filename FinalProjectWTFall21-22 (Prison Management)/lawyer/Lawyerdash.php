<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  background-image: url('law.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}  
/* body{} page er background */

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background: grey;
}
.proname {
  text-align: center;
  color: white;
}
.title {
  color: grey;
  font-size: 18px;
}
.topright {
  position: absolute;
  top: 8px;
  right: 16px;
  font-size: 18px;
}


</style>
</head>
<body>

<?php
include 'header.php';
include 'nav.php';
include 'footer.php';
?>


<h2 class="proname">Profile</h2>

<div class="card">
  <img src="lawyer.jpg" alt="David" style="width:80%">
  <h1>Lt. Daniel Kaffee</h1>
  <h3>Lawyer</h3>
  <!-- <p class="title">Lawyer</p> -->
  <p>Prinstone Prison Facility</p>
  <p>Security Pass Level 3</p>
  <p><a href="aurpon10@gmail.com">daniel.naval@gmail.com</a></p>
  <div style="margin: 24px 0;">
    
  </div>
  
</div>


   
</div>
</body>
</html>
