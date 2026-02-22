<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(isset($_SESSION["username"])){

        header("location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SHREEPAL AGENCY</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: black;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: black; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color:teal; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;

  }
  .navbar {

      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #black !important;
  }
 .row{

      padding-top: 10px;
      padding-bottom: 0px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
.navbar-brand {
font-size: 30px;
}
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">SHREEPAL AGENCY</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">HOME</a></li>
        <li><a href="products.php">CATEGORY</a></li>
        <li><a href="login.php">LOGIN</a></li>
      </ul>
 <form method="POST" action="verify.php" style="margin-top:30px;">
  
    <div class="row">
       
 <div class="small-8">

       
   <div class="row">
  
  <div class="small-4 columns">

  <label for="right-label" class="right inline" style=" font-family: 'Montserrat', sans-serif;font-size:11;">Email</label>
  
   </div>
        
    <div class="small-8 columns">

         <input type="email" id="right-label" placeholder="azistar3223@gmail.com" name="username">
     
 </div>

   </div>
     
     <div class="row">
    
        <div class="small-4 columns">
         
     <label for="right-label" class="right inline"  style="font-family: 'Montserrat', sans-serif;">Password</label>
    
        </div>
  
          <div class="small-8 columns">
    
          <input type="password" id="right-label" name="pwd">
        
    </div>
   
       </div>

        
  <div class="row">
   
         <div class="small-4 columns">

     
       </div>
            <div class="small-8 columns">
           
   <input type="submit" id="right-label" value="Login" style="background: silver; border: none; color:black; font-family: 'Montserrat', sans-serif; font-size: 1em; padding: 10px;">
           
   <input type="reset" id="right-label" value="Reset" style="background: silver; border: none; color: black; font-family: 'Montserrat', sans-serif; font-size: 1em; padding: 10px;">
            
</div>
        
  </div>

        </div>
   
   </div>
    
</form>


 
    </div>
  </div>
</nav>

     
 

        <footer>
         
  <p style="text-align:center; font-size:0.8em;">&copy; SHREEPAL AGENCY.ALLRights Reserved</p>
        </footer>

   




  
 
  </body>
</html>
