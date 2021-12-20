
<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);
$con = mysqli_connect('localhost','root','','prison');


mysqli_select_db($con,"admin_home");
$sql="SELECT * FROM lawyer WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>LawyerName</th>

<th>Age</th>
<th>Phone</th>
<th>Address</th>
<th>TotalPrice</th>
<th>Type</th>


</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['l_name'] . "</td>";

  echo "<td>" . $row['age'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  
  echo "<td>" . $row['total_case'] . "</td>";
  echo "<td>" . $row['type'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>