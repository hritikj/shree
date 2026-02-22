<?php

include 'config.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$mob = $_POST["mob"];
$addr = $_POST["addr"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];

if($mysqli->query("INSERT INTO users (fname, lname, mobno, address,email, password) VALUES('$fname', '$lname', '$mob', '$addr','$email', '$pwd')")){
	echo 'Data inserted';
	echo '<br/>';
}

?>