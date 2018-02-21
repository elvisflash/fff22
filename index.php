<!DOCTYPE html>
<html>
<head>
	<title>FORMS</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body style="background-color: #3a7593; color: orange;"> 
<div style="padding:20px 150px 150px 150px;">
<nav class="navbar navbar-default">
  <div class="container-fluid"><h1  style="color: green; text-align: center;">Sign up for Flash system</h1>
    <div class="navbar-header">
      <a class="navbar-brand" href="active"><u>Flash System sign Up page</u></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="homepage.php">Skip to Homepage</a></li>
    </ul>
  </div>
</nav>
   <div> <hr>
    <form action="homepage.php" method="POST">
    Admission no: <input type="number" name="admin" required> <br> <br>
    First name:   <input type="text" name="name" required> <br> <br>
    Last name: <input type="text" name="name" required> <br> <br>
    Middle name:   <input type="text" name="name" required
    > <br> <br>
        FORM:
        <select size="1">
            <option value="1">1 South</option>
            <option value="2">1 North</option>
            <option value="3">2 South</option>
            <option value="4">2 North</option>
            <option value="5">3 South</option>
            <option value="6">3 North</option>
            <option value="7">4 South</option>
            <option value="6">4 North</option>
        </select> <br>
        <br><hr>
    D.O.B: 
      <select size="1">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
      </select> 

      <select size="1">
        <option value="1">January</option>
        <option value="2">February</option>
        <option value="3">March</option>
        <option value="4">April</option>
        <option value="5">May</option>
        <option value="6">June</option>
        <option value="7">July</option>
        <option value="8">August</option>
        <option value="9">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
      
      </select> 
       <select size="1">
        <option value="1">1985</option>
        <option value="2">1986</option>
        <option value="3">1987</option>
        <option value="4">1988</option>
        <option value="5">1989</option>
        <option value="6">1990</option>
        <option value="7">1991</option>
        <option value="8">1992</option>
        <option value="9">1993</option>
        <option value="10">1994</option>
        <option value="11">1995</option>
        <option value="12">1996</option>
        <option value="13">1997</option>
        <option value="14">1998</option>
        <option value="15">1999</option>
        <option value="16">2000</option>
        <option value="17">2001</option>
        <option value="18">2002</option>
        <option value="19">2003</option>
        <option value="20">2004</option>
        <option value="21">2005</option>
        
      </select> 

      <br> <hr>
         <input type="radio" name="Gender" value="Male"> Male   <br> 
         <input type="radio" name="Gender" value="Female"> Female  <br>
         <input type="radio" name="Gender" value="Other"> Other/choose not to specify<br><hr>

        password <input type="password" name="password" required> <br> <br>
        Confirm password <input type="password" name="password" required> <br> <br>
        <button class="btn btn-danger" type="Reset">Reset</button> 
        <button class="btn btn-success" type="Submit">Submit</button>  <hr>
    </form>
  </div> 
   </div>
</body>
</html> 