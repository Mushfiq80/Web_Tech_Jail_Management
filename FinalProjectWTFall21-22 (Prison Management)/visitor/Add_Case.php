
<?php
require_once 'header.php';

require_once 'Controller/CaseController.php';
//$id=$_GET["id"];
//$e=getEmployee('id');

?>
 <script src="js/case.js"></script>
 <fieldset style="background-color:rgb(222 234 240);">


   <h1 align="center">Case File Date</h1>
   <hr>
   <br>
   <form action="" method="post" onsubmit="return validate()" enctype="multipart/form-data">
     <h5><?php echo $err_db; ?></h5>
             <table align="center">

              <!-- <tr>
                 <td>
                  <input name="id" value="<?php echo $e["id"];?>" type="hidden">
               </td>-->
               </tr>

               <tr>
     <td>Payment Date</td>
     <td>:
       <select id="day" name="day">
         <option selected disabled>Day</option>
         <?php
             for($i=1;$i<32;$i++){
               if($day == $i)
                   echo "<option selected>$i</option>";
               else
                   echo "<option>$i</option>";
                     }

           ?>
       </select>

       <select id="month" name="month">
           <option selected disabled>Month</option>
           <?php
             // foreach($months as $m)
             for($i=1;$i<13;$i++){
                   if($month == $i)
                       echo "<option selected>$i</option>";
                   else
                       echo "<option>$i</option>";
                         }
             ?>
       </select>

       <select id="year" name="year">
           <option selected disabled>Year</option>
           <?php
               for($i=1990;$i<2021;$i++){
                 if($year == $i)
                     echo "<option selected>$i</option>";
                 else
                     echo "<option>$i</option>";
                       }

             ?>
       </select>

     </td>
   </tr>
   <tr>
     <td></td>
     <td><span id="err_day" style="color:red;"><?php echo $err_day;?></span> &nbsp; &nbsp; <span id="err_month" style="color:red;"><?php echo $err_month;?></span> &nbsp; &nbsp; <span id="err_year"  style="color:red;"> <?php echo $err_year;?> </span></td>
   </tr>

               <tr>
                 <td>Criminal name</td>
                 <td>: <input  type="text" name="criminal_name" ><br>
                 <span style="color:red;"><?php echo $err_cname;?></span></td>
               </tr>

               <tr>
                 <td>Criminal Address</td>
                 <td>: <input  type="text" name="criminal_address" ><br>
                 <span style="color:red;"><?php echo $err_address;?></span></td>
               </tr>

               <tr>
                 <td>Crime</td>
                 <td>: <input  type="text" name="crime"  ><br>
                 <span style="color:red;"><?php echo $err_crime;?></span></td>
               </tr>




               <tr>
                 <td>Lawyer Name</td>
                 <td>: <input type="text"  name="lawyer_name" ><br>
                 <span style="color:red;"><?php echo $err_lname;?></span></td>
               </tr>

               <tr>
                 <td>Phone</td>
                 <td>
                    <input id="phone" type="text" name="phone" ><br>
                   <span id="err_phone" style="color:red;"><?php echo $err_phone_num;?></span>
                 </td>
               </tr>

           
               <tr>
                 <td></td>
                  <td align="center"><input type="submit" name="case_file" value="CaseFile" ></td>
               </tr>

             </table>


   </form>
 </fieldset>


