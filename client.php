<?php
include("nusoap.php");
$client = new soapclient("http://localhost/WebServiceSOAP/server.php?wsdl");
$result    =    $client->gethelloworld("Milap Patel");
echo "<pre>";
print_r($result);
echo "</pre>";
?>