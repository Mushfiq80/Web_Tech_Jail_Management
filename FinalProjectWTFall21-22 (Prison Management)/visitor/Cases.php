<?php include 'header.php';
	//require_once 'Controller/CaseController.php';
	require_once 'Controller/CaseController.php';
	//$lawyer = getCasefile($_SESSION["loggeduser"]);
	$lawyer = getAllCase();
?>


<!--All Products starts -->

<div class="center">
	<h3 class="text">All Cases</h3>

	<div id="suggesstion"></div>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			
			<th>CriminalName</th>
			<th>CriminalAddress</th>
			<th>Crime</th>
			           
            <th>LawyerName</th>
            <th>Phone</th>
            <th>CaseFileDate</th>
			<th>Edit</th>
		
           
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($lawyer as $p){
					echo "<tr>";
						echo "<td>$i</td>";
						
						echo "<td>".$p["criminal_name"]."</td>";
						echo "<td>".$p["criminal_address"]."</td>";
						echo "<td>".$p["crime"]."</td>";
                       
                        echo "<td>".$p["lawyer_name"]."</td>";
                        echo "<td>".$p["phone"]."</td>";
                        echo "<td>".$p["date"]."</td>";
                    
						echo '<td><a href="edit_case.php?id='.$p["id"].'" class="btn btn-success">Edit</a></td>';
						echo '<td><a href="delete_case.php?id='.$p["id"].'" class="btn btn-success">Delete</a></td>';

						
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>

<!--Products ends -->
