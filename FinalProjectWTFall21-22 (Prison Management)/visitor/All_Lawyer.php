<?php include 'header.php';
	require_once 'Controller/lawyerController.php';
	$lawyer = getLawyer();
?>
<!--All Products starts -->

<div class="center">
	<h3 class="text">All Lawyer</h3>

	<div id="suggesstion"></div>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			
			<th>Name</th>
			<th>Age</th>
			<th>Phone</th>
			           
            <th>Address</th>
            <th>Total Case</th>
            <th>Type</th>
           
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($lawyer as $p){
					echo "<tr>";
						echo "<td>$i</td>";
						
						echo "<td>".$p["l_name"]."</td>";
						echo "<td>".$p["age"]."</td>";
						echo "<td>".$p["phone"]."</td>";
                       
                        echo "<td>".$p["address"]."</td>";
                        echo "<td>".$p["total_case"]."</td>";
                        echo "<td>".$p["type"]."</td>";
                    
                      

						
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>

<!--Products ends -->
