<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "sitelogin";
$port = 3307;

$bdd = new mysqli($servername, $username, $password, $db_name, $port);

if ($bdd->connect_error) {
  die("Connection failed: " . $bdd->connect_error);
}


echo "";
?>
