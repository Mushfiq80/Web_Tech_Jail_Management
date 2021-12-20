<?php
require_once 'Model/db_config.php';

$month="";
$err_month="";

$day="";
$err_day="";

$year="";
$err_year="";

$c_name="";
$err_cname="";

$lname="";
$err_lname="";

$crime="";
$err_crime="";

$phone_num="";
$err_phone_num="";

$address="";
$err_address="";




$ref_id="";
$err_ref_id="";

$err_db="";
$hasError=false;


if(isset($_POST["case_file"])){
  if(empty($_POST["criminal_name"])){
    $hasError=true;
    $err_cname="&nbsp;&nbsp;*Criminal name required";
  }
  elseif (strlen($_POST["criminal_name"]) <3){
    $hasError = true;
    $err_cname = "&nbsp;&nbsp;*First name must be greater than 2 characters";
  }
  elseif (is_numeric($_POST["criminal_name"])){
    $hasError = true;
    $err_cname = "&nbsp;&nbsp;*First name must be characters";
      }
  else
  {
    $c_name = htmlspecialchars($_POST["criminal_name"]);
  }


  if(empty($_POST["lawyer_name"])){
    $hasError=true;
    $err_lname="&nbsp;&nbsp;*Last name required";
  }
  elseif (strlen($_POST["lawyer_name"]) <3){
    $hasError = true;
    $err_lname = "&nbsp;&nbsp;*Last  name must be greater than 2 characters";
  }
  elseif (is_numeric($_POST["lawyer_name"])){
    $hasError = true;
    $err_lname = "&nbsp;&nbsp;*Last  name must be characters";
      }
  else
  {
    $lname = htmlspecialchars($_POST["lawyer_name"]);
  }



  if(empty($_POST["crime"])){
    $hasError=true;
    $err_crime= "&nbsp;&nbsp;*Crime Required";
  }
  

else
  {
    $crime = htmlspecialchars($_POST["crime"]);

  }

  if(empty($_POST["criminal_address"])){
    $hasError=true;
    $err_address= "&nbsp;&nbsp;*Address Required";
  }



  else
  {
    $address = htmlspecialchars($_POST["criminal_address"]);

  }


  if(empty($_POST["phone"])){
    $hasError=true;
    $err_phone_num= "&nbsp;&nbsp;*Phone number  Required";
  }



  else
  {
    $phone_num = htmlspecialchars($_POST["phone"]);

  }


 

  if(!isset($_POST["month"])){
        $hasError = true;
        $err_month= "&nbsp;&nbsp;*Month Required";
      }
      else{
        $month = $_POST["month"];
      }

      if(!isset($_POST["day"])){
        $hasError = true;
        $err_day= "&nbsp;&nbsp;*Day Required";
      }
      else{
        $day = $_POST["day"];
      }

      if(!isset($_POST["year"])){
        $hasError = true;
        $err_year= "&nbsp;&nbsp;*Year Required";
      }
      else{
        $year = $_POST["year"];
      }





 /* if(empty($_POST["salary"])){
  






      }*/
  if(!$hasError){

    $payment_date= $year.'-'.$month.'-'.$day;

    $rs=insertCase($c_name,$address,$crime,$lname,$phone_num,$payment_date);
    if ($rs === true) {
      header("Location: cases.php");
    }
    $err_db = $rs;
    }

}

else if (isset($_POST["edit_case"])){
  //do validations
  //if no error
  $rs = updateCase($_POST["criminal_name"],$_POST["criminal_address"],$_POST["crime"],$_POST["lawyer_name"],$_POST["phone"],$_POST["id"]);
  if($rs === true){
      header("Location: Cases.php");
  }
  $err_db = $rs;
}

else if (isset($_POST["delete_case"])){
  //do validations
  //if no error
  $rs = delete_Case($_POST["id"]);
  if($rs === true){
      header("Location: Cases.php");
  }
  $err_db = $rs;
}


//---------------------------------------------------

/*elseif(isset($_POST["paying_due"]))
{
 
  





 
  }
}*/


function updateCase($c_name,$address,$crime,$lname,$phone_num,$id){

  $query="update casefile set criminal_name='$c_name',criminal_address='$address',crime='$crime',lawyer_name='$lname',phone='$phone_num'  where id = $id ";

  return execute($query);
}

function insertCase($c_name,$address,$crime,$lname,$phone_num,$payment_date){
  $query="insert into casefile values (NULL,'$c_name','$address','$crime','$lname','$phone_num','$payment_date')";

  return execute($query); 

}

function getCase($id){
  $query="select * from casefile where id=$id";
  $rs=get($query);
  return $rs[0];
}

function getAllCase(){
  $query="select * from casefile";
  $rs=get($query);
  return $rs;
}




function delete_case($id)
{
    $query = "delete from casefile where id = $id";
    return execute($query);
}


// getDueSalary
 ?>
