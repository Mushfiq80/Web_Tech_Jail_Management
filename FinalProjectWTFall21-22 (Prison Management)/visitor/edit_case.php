<?php include 'header.php';
	require_once 'Controller/CaseController.php';

	$id = $_GET["id"];
	$pr= getCase($id);
?>
<!--editproduct starts -->
<div class="center">
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" class="form-horizontal form-material" enctype="multipart/form-data">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="hidden" name="id" value="<?php echo $pr["id"];?>">
			<input type="text" name="criminal_name" value="<?php echo $pr["criminal_name"];?>" class="form-control">
            <input type="text" name="criminal_address" value="<?php echo $pr["criminal_address"];?>" class="form-control">
           
            <input type="text" name="crime" value="<?php echo $pr["crime"];?>" class="form-control">
            <input type="text" name="lawyer_name" value="<?php echo $pr["lawyer_name"];?>" class="form-control">
            <input type="text" name="phone" value="<?php echo $pr["phone"];?>" class="form-control">
            
		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" name="edit_case" class="btn btn-success" value="Edit Case" class="form-control">
		</div>
	</form>
</div>

<!--edit category ends -->
