<?php
session_start();
$con = mysqli_connect("localhost","root","","warden_db");

if(isset($_POST['save_date']))
{
    $name = $_POST['name'];
    $date = date('Y-m-d', strtotime($_POST['date']));

    $query = "INSERT INTO meet (name,date) VALUES ('$name','$date')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Done";
        header("Location: Meeting.php");
    }
    else
    {
        $_SESSION['status'] = "Failed";
        header("Location: Meeting.php");
    }
}
?>