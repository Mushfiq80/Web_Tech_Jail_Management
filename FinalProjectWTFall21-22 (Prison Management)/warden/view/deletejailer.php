<?php 
$link=mysqli_connect("localhost","root","") or die(mysqli_error($link));
mysqli_select_db($link,"warden_db") or die(mysqli_error($link));
?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
</head>
<body>
  <br><br><br><br><br><br><br>
<div class="container">
 
</div>
  <div class="col-lg-12">
    <table class="table table-bordered">
      <thead>
        <tr>  
        <th>Name</th>
        <th>Email</th>
        <th>Username</th>
        <th>Position</th>
        <th>Address</th>
        <th>Delete</th>
</tr>
</thead>
<tbody>

<?php
$res=mysqli_query($link,"select * from jailerse");
while($row=mysqli_fetch_array($res))
{
  echo "<tr>";
  echo "<td>"; echo $row["Name"]; echo "</td>";
  echo "<td>"; echo $row["Email"]; echo "</td>";
  echo "<td>"; echo $row["Username"]; echo "</td>";
  echo "<td>"; echo $row["Position"]; echo "</td>";
  echo "<td>"; echo $row["Address"]; echo "</td>";
  echo "<td>"; ?> <a href="jailer.php?Name=<?php echo $row["Name"];?>"> <button type="button" class="btn btn-danger">Delete</button></a> <?php echo "</td>";
  echo "</tr>";
}

?>
</tbody>
</table> 
</div>
<center>
<button type="button" class="btn btn-success"  onclick="window.location.href='dashboardWardenView.php'">Dashboard</button>
</center>
</body>
<?php
if(isset($_POST["delete"]))
{
  mysqli_query($link,"delete from jailerse where Name='$_POST[Name]'") or die(mysqli_error($link));
  ?> 
  <script type="text/javascript">
    window.location.href=window.location.href;
    </script>
<?php 
}
?>

</html>

