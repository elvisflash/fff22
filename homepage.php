<!DOCTYPE html>
<html>
<head>
	<title>FLASH HIGH SCHOOL</title>
	 <meta name="keyword" content="elvis,prophy,flash,elly,peter,javascript,python,ruby">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="
	width=device-width,initial-scale=1.0" >
</head>
<body style="background-color: #4BB642  ; padding: 20px 150px 150px 150 px">
<h1 style="text-align: center; color: #2D41C2  ;">FLASH HIGH SCHOOL </h1>
	<H2 style="text-align: center;color: #336392;">School System</H2>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="active"><u>Flash System Homepage</u></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="login.php">Back to Log in</a></li>
      <li><a href="index.php">Sign Up a new user</a></li>
    </ul>
  </div>
</nav>
 <div class="container" style="border-style: solid;border-color: white;">
    <div class="row">
      <div class="col-sm-4"><h2><u style="color: lightblue   ">MOTTO</u></h2>
       <img src="im3.jpg" class="img-thumbnail" width="200px" height="200px">
       <h2 style="color: lightblue;">Strive to excel.</h2> 
       </div>
      <div class="col-sm-4"><h3><u style="color:lightblue ">MISSION</u></h3>
       <img src="im2.jpg" class="img-thumbnail" width="200px" height="200px">  <br>  
        <h2 style="color: lightblue;">To enhance quality education levels and create awareness on best knowledge.</h2> 
        </div>
      <div class="col-sm-4"><h3><u style="color: lightblue  ">VISSION</u></h3>
       <img src="im1.jpg" class="img-thumbnail" width="200px" height="200px">
        <h2 style="color: lightblue;">To output knowledgable teens and students to the society.</h2> 
         </div>
    </div>
   </div>
   <hr>
   <div style="background-color: lightgreen">
   <form method="GET" style="padding: 50px;">
   <H2><u>Subjects input form</u></H2> <br>
     <input type="number" name="kis" placeholder="Kiswahili" required> <br>
     <input type="number" name="eng" placeholder="English" required><br>
     <input type="number" name="maths" placeholder="Mathematics" required><br>
     <input type="number" name="bio" placeholder="Biology" required><br>
     <input type="number" name="chem" placeholder="Chemistry" required
     ><br>
     <input type="number" name="comp" placeholder="Computer" required><br>
     <input type="number" name="phyc" placeholder="Physics" required> <br> <br>
     <button class="btn btn-success">SUBMIT</button> <br>
<?php 
 $kis=$_GET["kis"];
 $eng=$_GET["eng"];
 $mat=$_GET["maths"];
 $bio=$_GET["bio"];
 $che=$_GET["chem"];
 $com=$_GET["comp"];
 $phy=$_GET["phyc"];
 $total=$kis+$eng+$mat+$bio+$che+$com+$phy;
 $aver=$total/7;

 echo " YOUR AVERAGE =" . $aver;


 ?>

   </form>
   <br> <br>
<hr> <br>
   </div>
</body>
</html>