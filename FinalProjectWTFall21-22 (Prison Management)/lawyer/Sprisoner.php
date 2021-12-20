<?php
 
include('config.php')
?>
 
 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
  .center {
  margin-top: 200px;
  margin-left: 500px;
  width: 60%;
}
body {
  background-image: url('cell.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}  

</style>


</head>
<body>
<?php
include 'header.php';
include 'nav.php';
include 'footer.php';
?>
<div class="center">
  <div class="container mt-4">
    <h6 className="text-center text-success mt-5"><b>Prison Search</b></h6>
      <div class="input-group mb-4 mt-3">
      <div class="form-outline">
          <input type="text" id="getName"/>
      </div>
    </div>                   
    <table class="table table-striped">
      <thead>
        <tr>
          
          <th>Name</th>
          <th>Age</th>
          <th>Country</th>
          <th>Class</th>
          <th>Allegation</th>
          <th>Cell No.</th>
        </tr>
      </thead>
      <tbody id="showSingle">
        <?php  
              $sql = "SELECT * FROM sprison";
              $query = mysqli_query($conn,$sql);
              while($row = mysqli_fetch_assoc($query))
              {
                echo"<tr>";
                
                echo"<td><h6>".$row['name']."</h6></td>";
                echo"<td>".$row['age']."</td>";
                echo"<td>".$row['country']."</td>";
                echo"<td>".$row['Class']."</td>";
                echo"<td>".$row['allegation']."</td>";
                echo"<td>".$row['cell']."</td>";
                  
                echo"</tr>";   
              }
          ?>
      </tbody>
    </table>
  </div>
            </div>
</body>
</html>
<script>
  $(document).ready(function(){
   $('#getName').on("keyup", function(){
     var getName = $(this).val();
     $.ajax({
       method:'POST',
       url:'livesearch.php',
       data:{name:getName},
       success:function(response)
       {
            $("#showSingle").html(response);
       } 
     });
   });
  });
</script>