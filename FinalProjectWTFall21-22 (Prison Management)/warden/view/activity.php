<html>
<head>
    <title>FOX RIVER STATE PENITENTIARY</title>
    <link rel="stylesheet" href="../css/activity.css">
    <style>
.Conten{
      width: 90%;
      top:60%;
      transform: translateY(-50%) ;
      margin-top:100px;
      margin-left:150px;
    color: #fff;
}
</style>
</head>
<body>

    <div class="banner">
        <ul>
            <li style="float:left"><a href="../index.html">FRSP</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
           <li><a href="../index.html">Home</a></li>
         </ul>
         
         <img src="../image/jailer.jpg" style="width: 150px; height: 150px; position: absolute; top: 350px; right: 190px;" />
         <img src="../image/prisoner.png" style="width: 200px; height: 150px; position: sticky; top: 150px; left: 170px;" />         
         <img src="../image/lawyer.png" style="width: 150px; height: 150px; position: relative; top: 350px; left: 490px;" /> 
         <div id="all-btn">
         <div class="Content">
        <div> 
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <button class="btn" type="button" onclick="window.location.href='view/signupWardenView.php'"><span></span> ADD</button>
            <button class="btn" type="button" onclick="window.location.href='view/signupWardenView.php'"><span></span> UPDATE</button>
            <button class="btn" type="button" onclick="window.location.href='view/signupWardenView.php'"><span></span> DELETE</button><br>
            <button class="btn" type="button" onclick="window.location.href='dashboardWardenView.php'"><span></span> DASHBOARD</button>
        </div>
        </div>
        <div class="Conten">
        <div> 
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <button class="btn" type="button" onclick="window.location.href='addprisoner.php'"><span></span> ADD</button><br>
            <button class="btn" type="button" onclick="window.location.href='view/signupWardenView.php'"><span></span> UPDATE</button><br>
            <button class="btn" type="button" onclick="window.location.href='view/signupWardenView.php'"><span></span> DELETE</button>
        </div>
        </div>
        <div class="Conte">
        <div> 
          
            <button class="btn" type="button" onclick="window.location.href='addjailer.php'"><span></span> ADD</button><br>
            <button class="btn" type="button" onclick="window.location.href='updatejailer.php'"><span></span> UPDATE</button><br>
            <button class="btn" type="button" onclick="window.location.href='deletejailer.php'"><span></span> DELETE</button>
        </div>
        </div>
</div>
    </div>
</body>
</html>
<script>
    document.getElementById("all-btn").style.visibility='hide';
  function showall()
  {
    document.getElementById("all-btn").style.visibility='visible';
  }
</script>

