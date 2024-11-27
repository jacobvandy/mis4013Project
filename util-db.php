<?php
function get_db_connection() {
  $servername = "4013-finalproject.mysql.database.azure.com";
  $username = "jacobvandy1";
  $password = "BoomerSooner1";
  $dbname = "candyschema";
  $port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
   }
  return $conn;
}
?>
