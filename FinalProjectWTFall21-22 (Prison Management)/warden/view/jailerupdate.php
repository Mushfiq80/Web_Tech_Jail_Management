<?php
$link=mysqli_connect("localhost","root","") or die(mysqli_error($link));
mysqli_select_db($link,"warden_db") or die(mysqli_error($link));
$name=$_GET["Name"];
$email="";
$position="";
$res=mysqli_query($link,"select * from jailerse where Name='$name'");
while($row=mysqli_fetch_array($res))
{
    $name=$row["Name"];
    $email=$row["Email"];
    $position=$row["Position"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <center>

<div class="container">
  <form action="" name="form1" method="post">
  <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo $name; ?>" >
    </div><br>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"  value="<?php echo $email; ?>">
    </div><br>
    <div class="form-group">
      <label for="position">Position:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter position" name="position"  value="<?php echo $position; ?>">
    </div><br>
    <button type="submit" name="update" class="btn btn-default">Update</button>
  </form>
</div>
</center>

</body>
<?php
if(isset($_POST["update"]))
{
  mysqli_query($link,"UPDATE `jailerse` SET `Name`='$_POST[name]',`Email`='$_POST[email]',`Position`='$_POST[position]'  WHERE Name='$name'");
  ?>
    <script type="text/javascript">
    window.location="successMessage.php";
</script>
<?php
}
?>
</html>