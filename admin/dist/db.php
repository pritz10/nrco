<?php 	

$localhost = "localhost";
$username = "root";
$password = "pritz";
$dbname = "nrconewdb";
 // db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
  echo "Not  connected";
} else {
  echo "Please wait...";
}

?>