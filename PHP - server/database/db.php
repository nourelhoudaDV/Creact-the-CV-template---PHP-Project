<?php
$servername = "localhost";
$username = "root";
$password = "simo1234";

try {
  $conn = new PDO("mysql:host=$servername;dbname=CVtemplate", $username, $password); // can with the simple way include the connection between the pages with using the clobal varaibles (include('path name'))
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>