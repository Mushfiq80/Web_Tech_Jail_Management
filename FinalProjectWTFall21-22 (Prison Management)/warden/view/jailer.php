<?php
$link=mysqli_connect("localhost","root","") or die(mysqli_error($link));
mysqli_select_db($link,"warden_db") or die(mysqli_error($link));
$name=$_GET["Name"];
mysqli_query($link,"delete from jailerse where Name='$name'");
echo $name;
?>

<script type="text/javascript">
window.location="deletejailer.php"
</script>