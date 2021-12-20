<?php include 'header.php';
	require_once 'Controller/prisonerController.php';
	$lawyer = getPrisoner();
?>
<!--All Products starts -->

<div class="center">
	<h3 class="text">All Lawyer</h3>

	<div id="suggesstion"></div>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			
			<th>Crime Name</th>
			<th>Age</th>
		
			           
            <th>Address</th>
            <th>Crime</th>
            <th>Prison Address</th>
            <th>Cell</th>
           
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($lawyer as $p){
					echo "<tr>";
						echo "<td>$i</td>";
						
						echo "<td>".$p["c_name"]."</td>";
						echo "<td>".$p["age"]."</td>";
						
                       
                        echo "<td>".$p["address"]."</td>";
                        echo "<td>".$p["crime"]."</td>";
                        echo "<td>".$p["prison"]."</td>";
                        echo "<td>".$p["cell"]."</td>";
                    
                    
                      

						
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>

<!--Products ends -->
