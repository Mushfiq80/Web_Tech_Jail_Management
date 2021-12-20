<?php
$courseId="";
$coursename="";
$coursecredit="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $courseId=$_POST["courseid"];
    $coursename=$_POST["coursename"];
    $coursecredit=$_POST["coursecredit"];
   
    include "../model/db_config.php";
    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
    $query="insert into course values('$courseId','$coursename','$coursecredit')";
    if (mysqli_query($conn,$query))
{
    echo "inserted!";
    
}
else
{
   echo "can not insert user!";
}
}
?> 
<html>
<link rel="stylesheet" type="text/css" href="../css/mycss9.css">
    <body>
    <h1 align="center"> Add new course here </h1>
    <h2 align="center">Please enter the required information</h2>
        <form action="" method="post" align="center">
        Course  ID :<input type="numeric" name="courseid"placeholder="courseId"><br>
        Course name:<input type="text" name="coursename"placeholder="coursename"><br>
        Course credit:<input type="number" name="coursecredit"placeholder="Credit"><br>
        <input type="submit" value="Add Course">
        </table>
        </form>
        <Button><a href="course.php">GO back</a></button>
    </body>  
</html> 