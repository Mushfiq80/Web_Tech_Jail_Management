<?php include 'header.php';
	require_once 'Controller/CaseController.php';

	$id = $_GET["id"];
	$pr= getCase($id);
?>
<!--edit category starts -->



<div class="center">
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-material">
		<div class="form-group">
			<h4 style="color: red;" >Are you sure to Delete?</h4> 
			<input type="hidden" name="id" value="<?php echo $pr["id"];?>">
			<input type="text" name="criminal_name" value="<?php echo $pr["criminal_name"];?>" class="form-control">
            <input type="text" name="criminal_address" value="<?php echo $pr["criminal_address"];?>" class="form-control">
           
            <input type="text" name="crime" value="<?php echo $pr["crime"];?>" class="form-control">
            <input type="text" name="lawyer_name" value="<?php echo $pr["lawyer_name"];?>" class="form-control">
            <input type="text" name="phone" value="<?php echo $pr["phone"];?>" class="form-control">
		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" name="delete_case" class="btn btn-danger" value="Delete Case" &tab;>

			<a href="Cases.php"> Cancel</a>
		</div>
	</form>
</div>
  
