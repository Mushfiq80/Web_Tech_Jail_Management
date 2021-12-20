<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "warden_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Id, Name,Username,Birthday,Email,Gender,Designation From users Where Id='$id' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
  echo "<table>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>ID:</td><td>".$row["Id"]."</td></tr>";
    echo "<tr><td>Full Name:</td><td>".$row["Name"]."</td></tr>";
    echo "<tr><td>User name:</td><td>".$row["Username"]."</td></tr>";
    echo "<tr><td>Phone Number:</td><td>".$row["Birthday"]."</td></tr>";
    echo "<tr><td>Email:</td><td>".$row["Email"]."</td></tr>";
    echo "<tr><td>Gender:</td><td>".$row["Gender"]."</td></tr>";
	echo "<tr><td>Designation:</td><td>".$row["Designation"]."</td></tr>";

}
  echo "</table>";
} else {
  echo "ID not found";
}
$conn->close();
?>