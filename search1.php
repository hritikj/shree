<?php
require "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
   <?php
     if(isset($_POST['submit'])){
     if(isset($_GET['go'])){
     if(preg_match("/^[  a-zA-Z]+/", $_POST['userinput'])){
     $input=$_POST['userinput'];

     $result=$mysqli->query("SELECT  id, product_code , product_name FROM products WHERE product_code LIKE '%" . $input .  "%' OR product_name LIKE '%" . $input."%'");
     //-create  while loop and loop through result set
     while($row=mysqli_fetch_array($result)){
             $pro_code  =$row['product_code'];
             $pro_name=$row['product_name'];
            $ID=$row['id'];
     //-display the result of the array
     echo "<ul>\n";
     echo "<li>" . "<a  href=\"products.php?id=$ID\">"   .$pro_code . " " . $pro_name .  "</a></li>\n";
     echo "</ul>";
     }
     }
     else{
     echo  "<p>Please enter a search query</p>";
     }
     }
     }
   ?>
</body>
</html>
