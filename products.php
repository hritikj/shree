<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
include ("header.html");
?>
<style>


.search1:focus {
    width: 50%;
}
</style>

</div>


<div class="container-fluid text-left">
    <div class="row">
      <div class="col-md-12">
        <?php
          $result = $mysqli->query('SELECT * FROM products');
          if($result === FALSE){
            die(mysql_error());
          }

          if($result){
            $i=0;
           $product_id = array();
           $product_quantity = array();

            while($obj = $result->fetch_object()) {

              echo '<div class="col-sm-9">';
              echo '<p><h3>'.$obj->product_name.'</h3></p>';
              echo '<img src="images/products/'.$obj->product_img_name.'"/>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Description</strong>: '.$obj->product_desc.'</p>';
              echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';
              echo '<p><strong>Price (Per Unit)</strong>: '.$currency.$obj->price.'</p>';



              if($obj->qty > 0){
                echo '<p><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" value="Add To Cart" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
              }
              else {
                echo 'Out Of Stock!';
              }
              echo '</div>';

              $i++;
            }

          }

          $_SESSION['product_id'] = $product_id;


          echo '</div>';
          echo '</div>';
          ?>

        <div class="row" style="margin-top:10px;">
          <div class="col-sm-3">
        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:1.0em;clear:both;">&copy; SHreepal agency All Rights Reserved.</p>
        </footer>

      </div>
    </div>
</section>
  </body>
</html>
