<?php 
if (isset($_GET["id"])) {
	$id = $_GET["id"];
  $servername = "65.108.43.126";
$username = "etusd549_etus";
$password = "aBfvV$%yZdu$";
$db = "etusd549_WebSpace";

 
$mysqli = new mysqli($servername, $username, $password,$db);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
// Perform query
$result = $mysqli -> query("SELECT grp FROM formation where id=$id");
    $row = $result->fetch_row();
echo $row[0];
}