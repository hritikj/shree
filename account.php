<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])) {
  echo '<h1>Invalid Login! Redirecting...</h1>';
  header("Refresh: 3; url=index.php");
}

if($_SESSION["type"]==="admin") {
  header("location:admin.php");
}

include ("config.php");
include("header.html");

?>
<html>
<body>
<div class="container-fluid">
    <div class="row" style="margin-top:00x;">
      <div class="col-sm-12">
        <p><?php echo '<h3>Hi ' .$_SESSION['fname'] .'</h3>'; ?></p>

        <p><h4>Account Details</h4></p>

        <p>Below are your details in the database. If you wish to change anything, then just enter new data in text box and click on update.</p>
      </div>
    </div>


     <form method="POST" action="update.php" style="margin-top:10px;">
      <div class="row">
        <div class="col-md-12">
         <div class="row">
            <div class="col-md-3"><span class="pull-right">
              <label for="right-label" class="right inline">First Name:</label>
            </div>
            <div class="col-md-9" text-right"><span class="pull-left">
              <?php

                $result = $mysqli->query('SELECT * FROM users WHERE id='.$_SESSION['id']);

                if($result === FALSE){
                  die(mysql_error());
                }

                if($result) {
                  $obj = $result->fetch_object();
                  echo '<input type="text" id="right-label" placeholder="'. $obj->fname. '" name="fname">';

                  echo '</div>';
                    echo '</div>';
                      echo '<br>';

                  echo '<div class="row">';
                  echo '<div class="col-md-3"><span class="pull-right">';
                  echo '<label for="right-label" class="right inline"> Last Name:</label>';
                  echo '</div>';
                  echo '<div class="col-md-9">';

                  echo '<input type="text" id="right-label" placeholder="'. $obj->lname. '" name="lname">';

                  echo '</div>';
                  echo '</div>';
                  echo '<br>';

                  echo '<div class="row">';
                  echo '<div class="col-md-3" ><span class="pull-right">';
                  echo '<label for="right-label" class="right inline">Mobile No:</label>';
                  echo '</div>';
                  echo '<div class="col-md-9">';
                  echo '<input type="text" id="right-label" placeholder="'. $obj->mobno. '" name="mobno">';



                  echo '</div>';
                  echo '</div>';
                  echo '<br>';

                  echo '<div class="row">';
                  echo '<div class="col-md-3"><span class="pull-right">';
                  echo '<label for="right-label" class="right inline">Address:</label>';
                  echo '</div>';
                  echo '<div class="col-md-9">';
                  echo '<input type="text" id="right-label" placeholder="'. $obj->address. '" name="address">';
                  echo '</div>';
                  echo '</div>';
                  echo '<br>';

                  echo '<div class="row">';
                  echo '<div class="col-md-3"><span class="pull-right">';
                  echo '<label for="right-label" class="right inline">Email:</label>';
                  echo '</div>';

                  echo '<div class="col-md-9">';


                  echo '<input type="email" id="right-label" placeholder="'. $obj->email. '" name="email">';

                  echo '</div>';
                  echo '</div>';
              }

              echo '<br>';

              echo '<div class="row">';
              echo '<div class="col-md-3"> <span class="pull-right">';
              echo '<label for="right-label" class="right inline">Password</label>';
              echo '</div>';
              echo '<div class="col-md-9">';
              echo '<input type="password" id="right-label" name="pwd">';

              echo '</div>';
              echo '</div>';
              echo '<br>';
          ?>

          <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-9"><span class="pull-left">
              <input type="submit" id="right-label" value="Update" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              <input type="reset" id="right-label" value="Reset" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
            </div>
          </div>
        </div>
      </div>
    </form>



    <div class="row" style="margin-top:30px;">
      <div class="col-sm-12">

        <footer>
           <p style="text-align:center; font-size:1.0em;">&copy; Shreepal Agency. All Rights Reserved.</p>
        </footer>

      </div>
    </div>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
