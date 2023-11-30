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
    $num = 1;
$result = $mysqli -> query("SELECT * FROM plnt where id=$id");
    $row = $result->fetch_row();
echo $row[7];
}
	if (isset($_GET["idd"])) {
	$id = $_GET["idd"];
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
    $num = 1;
$result = $mysqli -> query("SELECT * FROM propo where id=$id");
    $row = $result->fetch_row();
echo $row[7];
}

 ?>