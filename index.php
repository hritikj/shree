<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

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
      <a class="navbar-brand" href="#">SHREEPAL AGENCY</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">HOME</a></li>
        <li><a href="products.php">CATEGORY</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a  class="nav navbar-nav-left"href="account.php">PROFILE</a></li>';
            echo '<li><a href="logout.php">LOG OUT</a></li>';
          }else{
          echo '<li><a href="log.php">LOGIN</a></li>';
          echo '<li><a href="register.php">REGISTER</a></li>';
          }

          ?>
      </ul>
    </div>
  </div>
</nav>


<form method="post" action="products.php?go">


  <div class="col-md-10 ">
         <form style="margin-top:20px"; >
         <input type="text"    name="userinput" placeholder="Search for Products" style="text-align:center; margin-left:20%; max-width: 100%; width: 70%">
          <input type="submit" value="submit"  class="btn btn-default">
              <span class="glyphicon glyphicon-search"></span>
          </button>
      </form>

      <?php

         if(isset($_POST['submit'])){
         if(isset($_GET['go'])){
         if(preg_match("/^[  a-zA-Z]+/", $_POST['userinput'])){
         $input=$_POST['userinput'];

         $result=$mysqli->query("SELECT  id, product_code , product_name, type FROM products WHERE product_code LIKE '%" . $input .  "%' OR product_name LIKE '%" . $input."%'");
         //-create  while loop and loop through result set
         while($row=mysqli_fetch_array($result)){
                 $pro_code  =$row['product_code'];
                 $pro_name=$row['product_name'];
                $ID=$row['id'];
                // $type=$row['type'];
         //-display the result of the array
         echo "<ul>\n";

         echo "<li>" . "<a  href=\"products.php?id=$ID\">"   .$pro_code . " " . $pro_name .  "</a></li>\n";
        //  echo "<li>" . "<a  href=\"accessories.php?id=$ID\">"   .$pro_code . " " . $pro_name .  "</a></li>\n";
        //  echo "<li>" . "<a  href=\"cameras.php?id=$ID\">"   .$pro_code . " " . $pro_name .  "</a></li>\n";
        //  echo "<li>" . "<a  href=\"cases.php?id=$ID\">"   .$pro_code . " " . $pro_name .  "</a></li>\n";

         echo "</ul>";
         }
         }
         else{
         echo  "<p>Please enter a search query</p>";
         }
         }
         }
       ?>

  </div>


<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">UPCOMING SALE</h3>
<marquee> HURRY !!! GRAB THE FLAT 50% OFF </marquee>
  <img src="n1.jpg" class="img-responsive  margin" style="display:inline"  alt="Bird" width="100%" height="100%"  href="#">
  <h3>GRAB THE BIGGEST SALE</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">What Am I?</h3>
  <p>Online shopping for Home & Kitchen from a great selection of Small Kitchen Appliances, Coffee, Tea & Espresso, Vacuum, Cleaning. </p>
  <a href="#" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-search"></span> Search
  </a>
</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">
  <h3 class="margin">SHOP BY CATEGORY</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <p>Online shopping for Home & Kitchen from a great selection of Small Kitchen Appliances, Coffee, Tea & Espresso, Vacuum, Cleaning</p>
      <img src="n1.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4">
      <p>Online shopping for Home & Kitchen from a great selection of Small Kitchen Appliances, Coffee, Tea & Espresso, Vacuum, Cleaning</p>
      <img src="n1.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4">
      <p>Online shopping for Home & Kitchen from a great selection of Small Kitchen Appliances, Coffee, Tea & Espresso, Vacuum, Cleaning</p>
      <img src="n1.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Bootstrap Theme Made By HRITIK JAISWAL</p>
</footer>

</body>
</html>

