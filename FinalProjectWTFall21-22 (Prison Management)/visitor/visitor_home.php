<?php

include 'header.php';
//include 'livesearch.php';

session_start();
if($_SESSION["loggeduser"]==null)
{
	header("Location: login.php");
}


/*if(!isset($_COOKIE["login"]))
	header("location:login.php");*/



 
?>

<html>
<head>
<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","livesearch.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>
</head>
<body>

<form>
<select name="prison" onchange="showUser(this.value)">
  <option value="">Select a Lawyer:</option>
  <option value="1">raha</option>
  <option value="2">rahat</option>
  <option value="3">rahin</option>
  </select>
</form>
<br>
<div id="txtHint"><b>Lawyer will be listed here...</b></div>

</body>
</html>