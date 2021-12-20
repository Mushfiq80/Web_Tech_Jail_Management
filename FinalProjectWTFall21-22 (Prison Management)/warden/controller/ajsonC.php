
<link rel="stylesheet" type="text/css" href="../css/mycss12.css">
<?php

$data = file_get_contents("addedJailer.json");
$mydata = json_decode($data);
 
	 foreach($mydata as $myobject)
	 {
		
		
		echo "Student Personal Information:  <br>";
		foreach($myobject as $key=>$value)
		{
			echo $key." is: ".$value."<br>";
		}
		echo "-------------------------------------------<br>";
	 }

?>

