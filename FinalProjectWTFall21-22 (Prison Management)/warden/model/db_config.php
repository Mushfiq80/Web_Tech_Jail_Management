<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "warden_db";

function execute($query)
{
    global $dbhost,$dbuser,$dbpass,$db;
    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
     mysqli_query($conn,$query);
}
function get($query)
{
    global $dbhost,$dbuser,$dbpass,$db;
    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
    $result= mysqli_query($conn,$query);
    $data=[];
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            $data[]=$row;
        }
    }
    return $data;
}
	
?>