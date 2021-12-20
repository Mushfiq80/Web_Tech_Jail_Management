<?php 
  include("config.php");
 
   $name = $_POST['name'];
 
   $sql = "SELECT * FROM sprison WHERE name LIKE '$name%'";  // or %$name% <- Search for any alphabet
   $query = mysqli_query($conn,$sql);
   $data='';
   while($row = mysqli_fetch_assoc($query))
   {
       $data .=   '
       <tr>
           
           <td>'.$row["name"].'</td>
           <td>'.$row["age"].'</td>
           <td>'.$row["country"].'</td>
           <td>'.$row["Class"].'</td>
           <td>'.$row["allegation"].'</td>
           <td>'.$row["cell"].'</td>
       </tr>
   ';
   }
    echo $data;
 ?>