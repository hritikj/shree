<?php
 require 'config.php';
 session_start();

 ?>
<!DOCTYPE>
<php>
<head>


      <!-- print_r($_SESSION); -->

    <title>Main Homepage</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="icon" type="image/x-icon" href="/images/icons/camera-icon.png">
    <!-- <meta http-equiv="refresh" content="5000000"> -->
</head>

<body>

    <!---Header 1--
    <div class="main-header">
        <div class="head1">
        <img src="images/icons/camera-icon.png" alt="Icon" >
        </div>
        <div class="head2"><input type="search">Go Search</div>
        <div class="head3"><a href="#">LogIn</a></div>
        <div class="head4"><a href="#">Cart</a></div>
        <div class="head5"><a href="#">About Us</a></div>
    </div>
     <!--Header 1 Ends-->

	 <!--- Header-->

<div class="wrapper row1">
    <header id="header" class="hoc clear">
        <div id="logo" class="fl_left">
            <h1><a href="homepage.php">Pixel</a></h1>
        </div>



        <nav id="mainav" class="fl_right">
            <ul class="clear">
                <li class="active"><a href="homepage.php">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="index.php"><u><?php echo $_SESSION['first_name'] ?></u></a></li>
                <li><a href="logout.php">Log Out</a></li>

            </ul>
        </nav>
       </header>
</div>


	<!---Header Ends-->

   <div class="search-content" >
     <form  method="post" action="homepage.php?go"  id="searchform">
       <input  type="text" name="userinput">
       <input  type="submit" style="width: 20%;height: 5.3%;border: 4px solid #ccc;"
       name="submit" value="Search">
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
              $type=$row['type'];
       //-display the result of the array
       echo "<ul>\n";


       echo "<li>" . "<a  href=\"$type.php?id=$ID\">"   .$pro_code . " " . $pro_name .  "</a></li>\n";
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




     <!--Slider-->
            <div id="slider">
            <figure>
            <img src="images/img1.jpg" alt>
            <img src="images/img2.jpg" alt>
            <img src="images/img5.jpg" alt>
            <img src="images/img3.jpg" alt>
            <img src="images/img4.jpg" alt>
            </figure>
        </div>
     <!--Slider Ends-->

    <div class="main-content">
        <div class="content1">
            <a href="lenses.php">
                <img src="images/content/img1.jpg"><br>
                <span >Lenses</span>
            </a>
        </div>
        <div class="content2">
            <a href="accessories.php">
                <img src="images/content/img2.jpg"><br>
                <span >Accessories</span>
            </a>
        </div>
        <div class="content3">
            <a href="cameras.php">
                <img src="images/content/img3.jpg"><br>
                <span >Cameras</span>
            </a>
        </div>
        <div class="content4">
            <a href="cases.php">
                <img src="images/content/img4.jpg"><br>
                <span >Cases</span>
            </a>
        </div>
    </div>

<!--  Footer   -->
<footer>
  <div class="footer">
    <a href="homepage.php" >Back To Home</a>
    <p>&copy; PIXEL || All Rights Reserved.</p>
    <span>
    <input type="email" placeholder="  Enter email"> <button type="submit">Email Id </button>
    </span>
  </div>
</footer>

</body>
</php>
